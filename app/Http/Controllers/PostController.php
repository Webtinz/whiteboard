<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Team;
use App\Models\Like;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::with('author', 'team')->orderBy('created_at', 'desc')->get();
        $posts = Post::with('likes')->orderBy('created_at', 'desc')->get();
        $user = auth()->user();
        $teams = Team::all();
        return view('posts.index', compact('posts','teams', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // Affiche le formulaire de création d'un post
    public function create()
    {
        $teams = Team::all(); // Lister les équipes disponibles
        return view('posts.create', compact('teams'));
    }

    // Enregistre un nouveau post
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'content' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'team_id' => 'required|exists:teams,id',
        ]);

        // Traitement de l'image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('posts_images', 'public');
        }
        

        // Création du post
        Post::create([
            'content' => $request->content,
            'team_id' => $request->input('team_id'),
            'image' => $imagePath,
            'author_id' => auth()->user()->id,  // Assume que l'utilisateur est connecté
        ]);

        // Redirection après la création du post
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    public function filterByTeam($teamId)
    {
        // $posts = Post::with('author', 'team')->orderBy('created_at', 'desc')->get();
        $posts = Post::with('likes')->where('team_id', $teamId)->orderBy('created_at', 'desc')->get();
        $user = auth()->user();
        $teams = Team::all();
        return view('posts.index', compact('posts','teams', 'user'));
    }


    // Affiche le formulaire d'édition d'un post
    public function edit($post_id)
    {
        $post = Post::findOrFail($post_id);
        return view('posts.edit', compact('post'));
    }

    // Met à jour un post existant
    public function update(Request $request, $post_id)
    {
        $post = Post::findOrFail($post_id);

        $request->validate([
            'content' => 'required|string',
        ]);

        // Met à jour le contenu du post
        $post->update([
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post mis à jour avec succès !');
    }

    // Supprime un post
    public function destroy($post_id)
    {
        $post = Post::findOrFail($post_id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post supprimé avec succès !');
    }

    public function like($post_id)
    {
        $post = Post::findOrFail($post_id);
        $isLike = Like::where('user_id', auth()->id())
                        ->where('post_id', $post_id)->first();
        // dd($isLike);
        if($isLike){
            $post->likes()->detach(auth()->id());
        }else{
            $post->likes()->attach(auth()->id());
        }

        return redirect()->back()->with('success', 'Post liké avec succès !');
    }

    public function comment(Request $request, $post_id)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        Comment::create([
            'content' => $request->content,
            'post_id' => $post_id,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Commentaire ajouté avec succès !');
    }


}
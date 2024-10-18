<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupère tous les posts avec l'auteur
        $posts = Post::with('author')->get();
        
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // Affiche le formulaire de création d'un post
    public function create()
    {
        return view('posts.create');
    }

    // Enregistre un nouveau post
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        // Crée un nouveau post avec l'auteur authentifié
        Post::create([
            'content' => $request->content,
            'author_id' => auth()->id(),
        ]);

        return redirect()->route('posts.index')->with('success', 'Post créé avec succès !');
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
        $post->likes()->attach(auth()->id());

        return redirect()->back()->with('success', 'Post liké avec succès !');
    }

    public function unlike($post_id)
    {
        $post = Post::findOrFail($post_id);
        $post->likes()->detach(auth()->id());

        return redirect()->back()->with('success', 'Like retiré avec succès !');
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
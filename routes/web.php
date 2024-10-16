<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Whiteboard\FileController;
use App\Http\Controllers\Whiteboard\PostController;
use App\Http\Controllers\Whiteboard\GroupController;
use App\Http\Controllers\Whiteboard\MessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('Front_include.index');
});

Route::get('login1', function () {
    return view('Front_include.login');
})->name('login1');

Route::get('signup', function () {
    return view('Front_include.signup');
})->name('signup');


// Messages
Route::post('/messages/send', [MessageController::class, 'sendMessage'])->name('message.inbox.send');
Route::get('/messages/{receiverId}', [MessageController::class, 'getConversationWithUser']);
Route::get('/groupmessages/{groupId}', [MessageController::class, 'getGroupConversation']);

// Récupérer toutes les conversations (directes et de groupe)
Route::get('/conversations', [MessageController::class, 'getAllConversations'])->name('conversations');
// // Récupérer toutes les conversations (directes et groupes) pour l'utilisateur connecté
// Route::get('user/conversations', [MessageController::class, 'getUserConversations']);


// Groupes
Route::post('/groups/create', [GroupController::class, 'createGroup']);
Route::post('/groups/{groupId}/add-member', [GroupController::class, 'addMember']);
Route::delete('/groups/{groupId}/remove-member/{userId}', [GroupController::class, 'removeMember']);

// Posts By Ak
// Route::post('posts', [PostController::class, 'createPost']);

// Fichiers
Route::post('messages/{messageId}/files', [FileController::class, 'uploadFile']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Post routes
    Route::resource('/posts', PostController::class);
    Route::post('posts/{post}/like', [PostController::class, 'like'])->name('posts.like');
    Route::post('posts/{post}/unlike', [PostController::class, 'unlike'])->name('posts.unlike');
    Route::post('posts/{post}/comment', [PostController::class, 'comment'])->name('posts.comment');

    //Projects routes
    Route::resource('projects', ProjectController::class);
    // Route::post('projects', [ProjectController::class, 'store'])->name('projects.store');
    // Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('projects/delete/{project_id}', [ProjectController::class, 'delete'])->name('projects.delete');
    Route::post('projects/{project}/files', [FileController::class, 'store'])->name('files.store');
    Route::get('files/{file}/download', [FileController::class, 'download'])->name('files.download');
    Route::get('files/{file}', [FileController::class, 'delete'])->name('files.delete');
    Route::get('files/{id}/view', [FileController::class, 'view'])->name('files.view');


});

require __DIR__.'/auth.php';

<?php

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
    return view('Front_include.index');
});

Route::get('login', function () {
    return view('Front_include.login');
})->name('login');

Route::get('signup', function () {
    return view('Front_include.signup');
})->name('signup');


// Route::middleware('auth:sanctum')->group(function () {
    // Messages
    Route::post('messages/send', [MessageController::class, 'sendMessage']);
    Route::get('messages/{receiverId}', [MessageController::class, 'getConversationWithUser']);

    // Récupérer toutes les conversations (directes et de groupe)
    Route::get('conversations', [MessageController::class, 'getAllConversations']);
    // // Récupérer toutes les conversations (directes et groupes) pour l'utilisateur connecté
    // Route::get('user/conversations', [MessageController::class, 'getUserConversations']);


    // Groupes
    Route::post('groups/create', [GroupController::class, 'createGroup']);
    Route::post('groups/{groupId}/add-member', [GroupController::class, 'addMember']);
    Route::delete('groups/{groupId}/remove-member/{userId}', [GroupController::class, 'removeMember']);

    // Posts
    Route::post('posts', [PostController::class, 'createPost']);

    // Fichiers
    Route::post('messages/{messageId}/files', [FileController::class, 'uploadFile']);
// });
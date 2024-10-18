@extends('layouts.dashboardlayout')
@section('links')
@endsection
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Activities</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('posts.create') }}" class="btn btn-primary shadow-none rounded-pill">Add post <i class="mdi mdi-arrow-right ms-1"></i></a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

                        <div class="row vh-100">
                            <!-- Partie droite : Barre latérale ou contenu supplémentaire -->
                            <div class="col-xl-3 position-sticky">
                                <div class="card position-sticky" style="top: 20px;">
                                    <div class="card">
                                        <div class="card-header bg-primary text-white">
                                            <h4 class="card-title mb-0">Teams</h4>
                                        </div>
                                        <div class="card-body p-3">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item {{ request()->routeIs('posts.index') ? 'bg-info text-white' : '' }}">
                                                    <a href="{{ route('posts.index') }}" class="text-decoration-none {{ request()->routeIs('posts.index') ? 'text-white' : 'text-dark' }}">
                                                        <i class="bi bi-file-earmark-text"></i> All posts
                                                    </a>
                                                </li>
                                                @foreach($teams as $team)
                                                    <li class="list-group-item {{ request()->is('posts/filter/'.$team->id) ? 'bg-info text-white' : '' }}">
                                                        <a href="{{ route('posts.filterByTeam', $team->id) }}" class="text-decoration-none {{ request()->is('posts/filterByTeam/'.$team->id) ? 'text-white' : 'text-dark' }}">
                                                            <i class="bi bi-people"></i> {{ $team->name }} team posts
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                                                        
                                </div>
                            </div>                            
                            <!-- Partie gauche : Contenu principal -->
                            <div class="col-xl-7" style="height: 100vh; overflow-y: auto;">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-5">Activity</h4>
                                        <div class="row" data-masonry='{"percentPosition": true }'>
                                            @foreach ($posts as $post)
                                            <div class="col-sm-12 mb-4 shadow-lg">
                                                <!-- Header du post : avatar, auteur, date -->
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="{{ asset('assets/images/small/img-4.png') }}" alt="User Avatar" class="rounded-circle me-2" width="40" height="40">
                                                    <div>
                                                        <h6 class="mb-0">Team {{ $post->group->name }} posted by {{ $post->author->name }}</h6>
                                                        <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                                                    </div>
                                                    {{-- <div class="ms-auto">
                                                        <!-- Bouton options -->
                                                        <a href="#" class="text-muted" data-bs-toggle="dropdown">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                        
                                                <!-- Contenu du post -->
                                                <p>{{ $post->content }}</p>
                        
                                                <!-- Image associée au post -->
                                                @if(Str::endsWith($post->image, ['.jpg', '.jpeg', '.png', '.gif']))
                                                    <img class="img-fluid rounded mb-3" src="{{ Storage::url($post->image) }}" alt="Image">
                                                @elseif(Str::endsWith($post->image, ['.mp4', '.mkv', '.avi', '.mov']))
                                                    <video controls class="img-fluid rounded mb-3">
                                                        <source src="{{ Storage::url($post->image) }}" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                @endif
                        
                                                <!-- Boutons Like, Commenter, Partager -->
                                                <div class="d-flex justify-content-between align-items-center border-top pt-2">
                                                    <!-- Bouton Like -->
                                                    <form action="{{ route('posts.like', $post->id) }}" method="POST" class="me-2">
                                                        @csrf
                                                        <button type="button" class="btn btn-link text-muted like-button" data-post-id="{{ $post->id }}">
                                                            @if($post->isLikedByUser($user->id))
                                                                <i class="far fa-thumbs-up" style="color: blue"></i> <span class="like-count">Like ({{ $post->likes->count() }})</span>
                                                            @else
                                                                <i class="far fa-thumbs-up"></i> <span class="like-count">Like ({{ $post->likes->count() }})</span>
                                                            @endif
                                                        </button>                                                        
                                                    </form>
                        
                                                    <!-- Bouton Commenter -->
                                                    <a href="#comment-section-{{ $post->id }}" class="btn btn-link text-muted" data-bs-toggle="collapse">
                                                        <i class="far fa-comment"></i> Comment ({{ $post->comments->count() }})
                                                    </a>
                        
                                                    <!-- Bouton Partager -->
                                                    {{-- <a href="#" class="btn btn-link text-muted">
                                                        <i class="far fa-share-square"></i> Share
                                                    </a> --}}
                                                </div>
                        
                                                <!-- Section des commentaires -->
                                                <div class="collapse" id="comment-section-{{ $post->id }}">
                                                    <div class="card-footer">
                                                        <!-- Formulaire pour ajouter un commentaire -->
                                                        <form id="comment-form-{{ $post->id }}" class="d-flex align-items-center mb-3">
                                                            @csrf
                                                            <img src="{{ asset('assets/images/small/img-4.png') }}" alt="User Avatar" class="rounded-circle me-2" width="30" height="30">
                                                            <input type="text" name="content" class="form-control comment-content" placeholder="Write a comment..." required>
                                                            <button class="btn btn-primary ms-2 submit-comment" data-post-id="{{ $post->id }}" type="button">Post</button>
                                                        </form>
                                                        
                                                        <!-- Affichage des commentaires existants -->
                                                        <div class="comment-section">
                                                            @foreach ($post->comments as $comment)
                                                            <div class="d-flex align-items-center mb-2">
                                                                <img src="{{ asset('assets/images/small/img-4.png') }}" alt="Comment Author Avatar" class="rounded-circle me-2" width="30" height="30">
                                                                <div class="bg-light rounded p-2 w-100">
                                                                    <strong>{{$comment->user->name}}</strong>
                                                                    <p class="mb-1">{{ $comment->content }}</p>
                                                                    <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        
                            
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
    
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Probic.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://pichforest.com/" target="_blank" class="text-reset">Pichforest</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('click', '.like-button', function (e) {
        e.preventDefault();
        var postId = $(this).data('post-id');
        var likeButton = $(this);

        $.ajax({
            url: '/posts/' + postId + '/like',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
            },
            success: function (response) {
                if (response.liked) {
                    likeButton.find('i').css('color', 'blue');
                } else {
                    likeButton.find('i').css('color', '');
                }
                likeButton.find('.like-count').text('Like (' + response.likeCount + ')');
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            }
        });
    });
</script>
<script>
    $(document).on('click', '.submit-comment', function (e) {
        e.preventDefault();
        var postId = $(this).data('post-id');
        var commentForm = $('#comment-form-' + postId);
        var content = commentForm.find('.comment-content').val();
        var commentSection = commentForm.next('.comment-section');

        $.ajax({
            url: '/posts/' + postId + '/comment',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                content: content
            },
            success: function (response) {
                // Ajouter le nouveau commentaire à la section des commentaires
                var newComment = `
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('assets/images/small/img-4.png') }}" alt="Comment Author Avatar" class="rounded-circle me-2" width="30" height="30">
                        <div class="bg-light rounded p-2 w-100">
                            <strong>${response.comment.user.name}</strong>
                            <p class="mb-1">${response.comment.content}</p>
                            <small class="text-muted">Just now</small>
                        </div>
                    </div>
                `;
                commentSection.append(newComment);
                commentForm.find('.comment-content').val(''); // Effacer le champ de saisie
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            }
        });
    });
</script>
@endsection

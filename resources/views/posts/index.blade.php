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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                <li class="breadcrumb-item active">Activities</li>
                                <li class="breadcrumb-item"><a href="{{ route('posts.create') }}" class="btn btn-primary shadow-none rounded-pill">Add post <i class="mdi mdi-arrow-right ms-1"></i></a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Activity</h4>

                                <ul class="list-unstyled activity-wid">
                                    @foreach($posts as $post)
                                        <li class="activity-list" id="activity-item-1">
                                            <div class="activity-icon avatar-sm">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                    <i class="mdi mdi-folder"></i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-sm-row flex-column align-items-start">
                                                <div class="avatar-group position-relative me-sm-3 flex-shrink-0">
                                                    <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Maria Morgan">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-sm">
                                                    </a>
                                                </div>
                                                <div class="flex-grow-1 mt-3 mt-sm-0">
                                                    <div>
                                                        <p class="text-muted"><span class="text-dark fw-bold">Maria Morgan</span> added the noteClient Meeting Notes it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like <span class="text-primary fw-medium">Created a project.</span></p>
                                                        <div class="d-flex flex-wrap align-items-start gap-2">
                                                            <img src="assets/images/small/img-10.png" alt="" class="img-fluid rounded me-3" width="100">
                                                            <img src="assets/images/small/img-9.png" alt="" class="img-fluid rounded" width="100"> 
                                                        </div>     
                                                        <p class="font-size-12 text-muted fw-medium mt-2 mb-0">5 mins ago</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown ms-0 ms-sm-5">
                                                    <a class="font-size-16 text-muted dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item text-muted fw-medium" href="#"><i class="mdi mdi-circle-edit-outline me-1"></i>Edit</a>
                                                        <a class="dropdown-item text-muted fw-medium delete-item"
                                                        data-id="activity-item-1" href="#"><i class="mdi mdi-trash-can-outline me-1"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- end li -->
                                    @endforeach
                                </ul><!-- end ul -->
                            <div class="text-end mt-4">
                                <a href="javascript: void(0);" class="btn btn-primary shadow-none rounded-pill">View more <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

                        <div class="row">
                            <!-- Partie droite : Barre latérale ou contenu supplémentaire -->
                            <div class="col-xl-2">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Teams</h4>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{ route('posts.index') }}" class="text-decoration-none">Tous les posts</a>
                                            </li>
                                            @foreach($teams as $team)
                                                <li>
                                                    <a href="{{ route('posts.filterByTeam', $team->id) }}" class="text-decoration-none">{{ $team->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>                            
                            <!-- Partie gauche : Contenu principal -->
                            <div class="col-xl-8">
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
                                                        <h6 class="mb-0">Team {{ $post->team->name }} posted by {{ $post->author->name }}</h6>
                                                        <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <!-- Bouton options -->
                                                        <a href="#" class="text-muted" data-bs-toggle="dropdown">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <!-- Contenu du post -->
                                                <p>{{ $post->content }}</p>
                        
                                                <!-- Image associée au post -->
                                                @if($post->image)
                                                <img src="{{ Storage::url($post->image) }}" alt="Post Image" class="img-fluid rounded mb-3">
                                                @endif
                        
                                                <!-- Boutons Like, Commenter, Partager -->
                                                <div class="d-flex justify-content-between align-items-center border-top pt-2">
                                                    <!-- Bouton Like -->
                                                    <form action="{{ route('posts.like', $post->id) }}" method="POST" class="me-2">
                                                        @csrf
                                                        <button type="submit" class="btn btn-link text-muted">
                                                            <i class="far fa-thumbs-up"></i> Like ({{ $post->likes->count() }})
                                                        </button>
                                                    </form>
                        
                                                    <!-- Bouton Commenter -->
                                                    <a href="#comment-section-{{ $post->id }}" class="btn btn-link text-muted" data-bs-toggle="collapse">
                                                        <i class="far fa-comment"></i> Comment ({{ $post->comments->count() }})
                                                    </a>
                        
                                                    <!-- Bouton Partager -->
                                                    <a href="#" class="btn btn-link text-muted">
                                                        <i class="far fa-share-square"></i> Share
                                                    </a>
                                                </div>
                        
                                                <!-- Section des commentaires -->
                                                <div class="collapse" id="comment-section-{{ $post->id }}">
                                                    <div class="card-footer">
                                                        <!-- Formulaire pour ajouter un commentaire -->
                                                        <form action="{{ route('posts.comment', $post->id) }}" method="POST" class="d-flex align-items-center mb-3">
                                                            @csrf
                                                            <img src="{{ asset('assets/images/small/img-4.png') }}" alt="User Avatar" class="rounded-circle me-2" width="30" height="30">
                                                            <input type="text" name="content" class="form-control" placeholder="Write a comment..." required>
                                                            <button class="btn btn-primary ms-2" type="submit">Post</button>
                                                        </form>
                        
                                                        <!-- Affichage des commentaires existants -->
                                                        @foreach ($post->comments as $comment)
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img src="{{ asset('assets/images/small/img-4.png') }}" alt="Comment Author Avatar" class="rounded-circle me-2" width="30" height="30">
                                                            <div class="bg-light rounded p-2 w-100">
                                                                <strong>d</strong>
                                                                <p class="mb-1">{{ $comment->content }}</p>
                                                                <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <!-- Bouton "Voir plus" -->
                                        <div class="text-end mt-4">
                                            <a href="javascript: void(0);" class="btn btn-primary shadow-none rounded-pill">View more <i class="mdi mdi-arrow-right ms-1"></i></a>
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
@endsection

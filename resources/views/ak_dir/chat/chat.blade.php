@extends('layouts.dashboardlayout')
@section('links')
    <!-- lightbox css -->

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    {{-- <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" /> --}}
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        .default-display-none {
            display: none; /* Cache par défaut les éléments avec cette classe */
        }
        .card.rounded-0.shadow-none.mb-0 {
            min-height: 100% !important;
        }
        #min-height-100{
            min-height: 100% !important;
        }
        div#chat-conversation {
            min-height: 70vh !important;
        }

        .preview-container {
    display: flex;
    flex-wrap: wrap; /* Pour que les éléments se regroupent sur plusieurs lignes */
    gap: 15px; /* Espacement entre les fichiers */
    padding: 10px; /* Espacement interne pour un peu d'air */
    border: 2px solid #ddd; /* Bordure douce */
    border-radius: 10px; /* Coins arrondis */
    background-color: #f9f9f9; /* Légère couleur d'arrière-plan */
    max-height: 200px; /* Hauteur maximale */
    overflow-y: auto; /* Ajout d'une barre de défilement si le contenu dépasse */
}

.preview-container img, 
.preview-container video {
    max-width: 100px; /* Taille maximale des aperçus */
    max-height: 100px;
    border-radius: 8px; /* Coins arrondis pour les images et vidéos */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Effet d'ombre douce */
}

.preview-container span {
    font-size: 50px; /* Taille des icônes pour les fichiers */
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100px;
    height: 100px;
    background-color: #e2e2e2; /* Fond pour les fichiers non visuels */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.preview-container::-webkit-scrollbar {
    width: 8px; /* Largeur de la scrollbar */
}

.preview-container::-webkit-scrollbar-thumb {
    background-color: #888; /* Couleur de la barre de défilement */
    border-radius: 4px;
}

.preview-container::-webkit-scrollbar-thumb:hover {
    background-color: #555; /* Changement de couleur au survol */
}

    </style>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

@endsection
@section('content')

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Chat</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                        <li class="breadcrumb-item active">Chat</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="d-lg-flex mb-4">
                        <div class="card border-end shadow-none rounded-0 chat-leftsidebar mb-0">
                            <div class="p-4 pb-0">
                                <div class="d-flex align-items-center">
                                    <div class="d-inline-block position-relative flex-shrink-0">
                                        <div class="chat-user-img online">
                                            <img src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                                class="img-thumbnail avatar rounded-circle img-fluid" alt="">
                                            <span class="user-status"></span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="font-size-16 mb-1">{{ Auth::user()->name }}</h5>
                                        <a href="javascript:void(0);"
                                            class="text-muted mb-0 font-size-13">{{ Auth::user()->email }}</a>
                                    </div>
                                </div>
                                <div class="search-box py-4">
                                    <div class="position-relative">
                                        <input type="text" class="form-control rounded" id="search-chat"
                                            onkeyup="searchChat()" placeholder="Search...">
                                        <i class="bx bx-search-alt search-icon"></i>
                                    </div>
                                </div><!-- end search box -->
                            </div><!-- end card body -->
                            <div class="pb-4" id="all-chat">
                                <div class="px-3" data-simplebar style="max-height: 564px;">
                                    <div class="group-box chat-list-box">
                                        <div class="float-end">
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-transparent fs-5 rounded">
                                                    <a href="#" class="text-secondary" data-bs-toggle="modal"
                                                        data-bs-target=".create-new-groups"><i
                                                            class="mdi mdi-plus"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                        <h6 class="text-uppercase font-size-13 mt-4 pt-2 mb-3">Groups</h6>
                                        <ul class="list-unstyled chat-list group-chat" id="groupList">
                                            @forelse ($groupConversations as $groupId => $groupData)
                                                <li>
                                                    <a href="javascript: void(0);" class="fw-medium d-block chat-group-link" data-group-id="{{ $groupData['group']->id }}" data-group-name="{{ $groupData['group']->name }}" data-group-member-number="{{ $groupData['number_of_members'] }}" onclick="updateFormAction({{ $groupData['group']->id }})">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm">
                                                                <span
                                                                    class="avatar-title bg-light text-muted font-size-14 rounded-circle">
                                                                    <i class="mdi mdi-account-group"></i>
                                                                </span>
                                                            </div>
                                                            <div class="ms-3 chat-text">
                                                                {{ $groupData['group']->name }}
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- end li -->
                                            @empty
                                                <li>
                                                    <a href="#" class="fw-medium d-block"
                                                        style="background: rgb(241, 180, 76) !important; color: #fff">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm">
                                                                <span
                                                                    class="avatar-title bg-light text-muted font-size-16 rounded-circle">
                                                                    <i class="mdi mdi-alert"></i>
                                                                </span>
                                                            </div>
                                                            <div class="ms-3 chat-text">
                                                                <span class="alert warning">No group yet</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- end li -->
                                            @endforelse
                                        </ul><!-- end ul -->
                                    </div><!-- end -->

                                    <div class="user-box chat-list-box">
                                        <div class="float-end">
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-transparent fs-5 text-secondary rounded">
                                                    <a href="#" class="text-secondary" data-bs-toggle="modal"
                                                        data-bs-target=".direct-new-message"><i
                                                            class="mdi mdi-plus"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                        <h6 class="text-uppercase mt-4 pt-2 mb-3 font-size-12 text-muted">Direct
                                            message
                                        </h6>
                                        <ul class="list-unstyled chat-list mb-0 single-chat">
                                            @forelse ($directConversations as $userId => $messages)
                                            @php
                                                // Récupérer le premier message pour obtenir l'utilisateur avec qui échanger
                                                $firstMessage = $messages->first();
                                                $authUserId = Auth::user()->id; 
                                                $otherUser = $firstMessage->sender_id === $authUserId ? $firstMessage->receiver : $firstMessage->sender;
                                            @endphp
                                            <li>
                                                <a href="javascript: void(0);" class="fw-medium d-block chat-user-link" data-user-id="{{ $userId }}" data-user-name="{{ $otherUser->name  == Auth::user()->name ? "Yourself" : $otherUser->name }}">
                                                    <div class="d-flex align-items-center">
                                                        <div class="chat-user-img online flex-shrink-0">
                                                            <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                                class="img-fluid avatar-sm rounded-circle"
                                                                alt="">
                                                            <span class="user-status"></span>
                                                        </div>
                                                        <div class="ms-3 chat-text">
                                                            {{ $otherUser->name == Auth::user()->name ? "Yourself" : $otherUser->name }} <span class="bg-bg-info" id="unread-counter-{{ $userId }}"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end li -->
                                            @empty
                                            <li>
                                                <a href="#" class="fw-medium d-block chat-user-link" data-user-id="{{ Auth::user()->id }}"  style="background: rgb(241, 180, 76) !important; color: #fff">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-light text-muted font-size-16 rounded-circle">
                                                                <i class="mdi mdi-alert"></i>
                                                            </span>
                                                        </div>
                                                        <div class="ms-3 chat-text">
                                                            <span class="alert warning">No chat yet</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end li -->                                            
                                        @endforelse
                                        </ul><!-- end ul -->
                                    </div><!-- end -->
                                </div>
                            </div>
                        </div><!-- end card -->

                        <!-- Group Chat -->
                        <div id="group-chat-conversation" class="w-100 user-chat mt-4 mt-lg-0 default-display-none">
                            <div class="card rounded-0 shadow-none mb-0">
                                <div class="p-3 border-bottom">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm">
                                                    <span
                                                        class="avatar-title bg-light text-muted font-size-16 rounded-circle avatar-icon">
                                                        #
                                                    </span>
                                                </div>
                                                <div class="ms-3">
                                                    <h5 class="mb-0">
                                                        <div class="chat-title-text" id="chatName">Welcome</div>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-md-7">
                                            <div class="d-flex flex-wrap justify-content-sm-end align-items-center mt-4 mt-md-0"
                                                data-bs-toggle="modal" data-bs-target=".groups-details">
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);">
                                                            <div class="avatar-sm">
                                                                <span
                                                                    class="avatar-title rounded-circle bg-primary text-white" id="group-member-number">
                                                                    +5 {{-- Group members number --}}
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div><!-- end avatar group -->
                                            </div><!-- end -->
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div>

                                <div id="min-height-100">
                                    <div class="chat-conversation py-3" id="chat-conversation" data-simplebar
                                        style="max-height: 602px; margin-bottom:25px;">
                                        <ul class="list-unstyled mb-0 px-3 chat-conversation-list" id="chat-conversation-list">

                                        </ul><!-- end ul -->
                                    </div>

                                    <div class="p-3 chat-input-section">
                                        <form class="chatinput-form" data-id="chat-conversation-list" action="{{ route('message.inbox.send') }}"
                                            method="post" enctype="multipart/form-data" id="send-message-form">
                                            @csrf
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bx-plus fs-3"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);" id="cameraBtn">
                                                                <i class="mdi mdi-camera-outline me-2"></i>Camera</a>
                                                            <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);" id="photosBtn">
                                                                <i class="mdi mdi-image-multiple-outline me-2"></i>Photos</a>
                                                            <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);" id="audioBtn">
                                                                <i class="mdi mdi-microphone me-2"></i>Audio</a>
                                                            <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);" id="documentsBtn">
                                                                <i class="mdi mdi-file-document-outline me-2"></i>Documents</a>
                                                        </div>
                                                    </div>
                                                </div><!-- end col -->
                                                
                                                <div class="col">
                                                    <input type="file" id="fileInput" style="display: none;" name="file[]" multiple>
                                                    <input type="hidden" name="receiver_id" id="receiver_id" value="{{ Auth::user()->id }}" class="@error('receiver_id') is-invalid @enderror">
                                                    <input type="hidden" name="group_id" id="group_id" value="" class="@error('group_id') is-invalid @enderror">
                                                    <div class="position-relative">
                                                        <div id="preview" class="mt-2 mb-2 preview-container"></div> <!-- Conteneur pour l'aperçu des fichiers -->
                                                        <input type="text" name="content" class="form-control chat-input task-comment" id="chat-input" placeholder="Type your message here...">
                                                    </div>
                                                </div><!-- end col -->
                                                
                                                <div class="col-auto">
                                                    <div class="d-flex gap-3">
                                                        <button type="submit" class="btn btn-primary btn-rounded shadow-none chat-send">
                                                            <i class="mdi mdi-send send-task-comment"></i>
                                                        </button>
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </form><!-- end form -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- end user chat -->

                        <!-- Direct Massage -->
                        <div id="user-chat-conversation" class="w-100 user-chat mt-4 mt-lg-0 d-none default-display-none">

                        </div>
                    </div><!-- end row -->
                </div><!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- Create groups Modal -->
            <div class="modal fade create-new-groups" tabindex="-1" role="dialog"
                aria-labelledby="createGroupModal" aria-hidden="true">
                <form action="{{ route('create.group') }}" method="post" enctype="multipart/form-data" id="createGroupForm">
                    @csrf
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0">
                            <div class="modal-header bg-soft-primary">
                                <h5 class="modal-title font-size-16 text-primary" id="createGroupModal">Create Groups</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body p-4">
                                <div class="mb-3">
                                    <label for="GroupName" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="GroupName" name="name" placeholder="Enter Name">
                                </div>
                                {{-- <div class="mb-3">
                                <label for="Groupdetails" class="form-label">Description</label>
                                <textarea type="text" class="form-control" rows="3" id="Groupdetails" placeholder="Enter Description"></textarea>
                            </div> --}}
                                <div class="form-check form-switch form-switch-md ps-0">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Make Private</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-soft-primary" data-bs-dismiss="modal">Create Group</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </form>
            </div><!-- /.modal -->

            <!-- Create Direct Mesaage Modal -->
            <div class="modal fade direct-new-message" tabindex="-1" role="dialog"
                aria-labelledby="createGroupModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0">
                        <div class="modal-header bg-soft-primary">
                            <h5 class="modal-title font-size-16 text-primary" id="createGroupModal">New Message
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body p-0 py-3">
                            <div class="search-box py-2 px-4">
                                <div class="position-relative">
                                    <input type="text" class="form-control rounded" placeholder="Search...">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                            </div>
                            <hr>
                            <div class="px-4" data-simplebar style="max-height: 300px;">
                                <div>
                                    <div class="card shadow-none rounded-3">
                                        <div class="card-body">
                                            @forelse ($allUsers as $eachUser)
                                                <div class="d-flex chat-user-link" data-user-id="{{ $eachUser->id }}" data-user-name="{{ $eachUser->id == Auth::user()->id ? "Yourself" : $eachUser->name }}"  data-bs-dismiss="modal">
                                                    <div>
                                                        <img src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                                            class="img-fluid avatar-sm rounded" alt="">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="font-size-14 mb-0">{{ $eachUser->id == Auth::user()->id ? "Yourself" : $eachUser->name }}</h6>
                                                    </div>
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-0">{{ $eachUser->last_online_time ?? "Online" }} {{-- Last time user online if onlinestatus is no --}}</p>
                                                    </div>
                                                </div><!-- end -->
                                                <hr>
                                            @empty
                                                <div class="d-flex">
                                                    <div>
                                                        {{-- <img src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                                            class="img-fluid avatar-sm rounded" alt=""> --}}
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="font-size-14 mb-0 alert alert-warning text-center">No User found</h6>
                                                    </div>
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-0"></p>
                                                    </div>
                                                </div><!-- end -->
                                                <hr>
                                            @endforelse
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- groups details Modal -->
            <div class="modal fade groups-details" tabindex="-1" role="dialog" aria-labelledby="groupDetailModal"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0">
                        <div class="modal-header bg-soft-primary">
                            <h5 class="modal-title font-size-16 text-primary" id="groupDetailModal" ># Members</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body py-3 p-0">
                            <div class="search-box py-2 px-3">
                                <div class="position-relative">
                                    <input type="text" class="form-control rounded" placeholder="Search...">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                            </div>
                            <div>
                                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#members"
                                            role="tab" >
                                            Members (<span id="span-group-member-number">0</span>)
                                        </a>
                                    </li>
                                    <!-- end li -->
                                </ul><!-- end ul -->
                            </div>

                            <div class="tab-content pt-3">
                                <div class="tab-pane show active" id="members" data-simplebar
                                    style="max-height: 264px;">
                                    <ul class="list-unstyled member-list mb-0" id="u-member-list">
                                        <li class="chat-list">
                                            {{-- <a href="#" class="fw-medium member-list d-block"> --}}
                                                <div class="d-flex align-items-center text-center alert alert-warning mx-2">
                                                    <div class="flex-grow-1 ms-3">
                                                        <center>
                                                            <h5 class="font-size-15 mb-1">No members yet</h5>
                                                        </center>
                                                    </div>
                                                </div>
                                            {{-- </a> --}}
                                        </li><!-- end li -->
                                    </ul><!-- end ul -->
                                    <hr>
                                    <ul class="list-unstyled member-list mb-0">
                                        <li class="chat-list">
                                            <a href="javascript: void(0);" class="fw-medium d-block">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title bg-light text-body rounded">
                                                            <i class="mdi mdi-plus"></i>
                                                        </span>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5 class="font-size-15 mb-0">Add new</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end li -->
                                        @forelse ($allUsers as $eachUser)
                                            <li class="chat-list">
                                                <a href="javascript: void(0);" class="fw-medium member-list d-block">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ asset('assets/images/users/avatar-5.jpg') }}"
                                                                class="img-fluid avatar rounded" alt="">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h5 class="font-size-15 mb-1">{{ $eachUser->name }}</h5>
                                                            <p class="text-muted font-size-13 mb-0">{{ $eachUser->role }}</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-muted font-size-13 mb-0">
                                                                <form action="/groups/1/add-member" method="post" class="add-user-to-group">
                                                                    @csrf
                                                                    {{-- id="span-group-member-number" --}}
                                                                    <input type="text" hidden name="user_id" value="{{ $eachUser->id }}">
                                                                    <button type="submit" style="border: 0px !important; padding: 0px !important;background-color: #fff;"><i class="mdi mdi-plus"></i> Add</button>
                                                                </form>
                                                                <form action="/groups/1/add-member" method="post" class="delete-user-from-group">
                                                                    @csrf
                                                                    <input type="text" hidden name="user_id" value="{{ $eachUser->id }}">
                                                                    <button type="submit"  style="border: 0px !important; padding: 0px !important;background-color: #fff;"><i class="mdi mdi-delete"></i> Remove</button>
                                                                </form>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end li -->
                                        @empty
                                            <li class="chat-list">
                                                {{-- <a href="#" class="fw-medium member-list d-block"> --}}
                                                    <div class="d-flex align-items-center text-center alert alert-warning mx-2">
                                                        <div class="flex-grow-1 ms-3">
                                                            <center>
                                                                <h5 class="font-size-15 mb-1">No users yet</h5>
                                                            </center>
                                                        </div>
                                                    </div>
                                                {{-- </a> --}}
                                            </li><!-- end li -->                                            
                                        @endforelse
                                    </ul><!-- end ul -->
                                </div><!-- end -->
                            </div>
                        </div><!-- /.modal body -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-soft-primary" data-bs-dismiss="modal">Done</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>

<!-- end main content-->
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    {{-- data-dowload-file-id --}}

    <script>
        function updateFormAction(groupId) {
            var forms = document.getElementsByClassName('add-user-to-group');
    
            // Boucle sur chaque formulaire et mise à jour de l'attribut action
            Array.prototype.forEach.call(forms, function(form) {
                form.action = `/groups/${groupId}/add-member`;
            });
            
            var formsDelete = document.getElementsByClassName('delete-user-from-group');
    
            // Boucle sur chaque formulaire et mise à jour de l'attribut action
            Array.prototype.forEach.call(formsDelete, function(formDelete) {
                formDelete.action = `/groups/${groupId}/remove-member`;
            });
        }    
        // Appel de la fonction avec un groupId dynamique (par exemple)
        updateFormAction(groupId); // Change 1 par groupId
    </script>

    <script>
        $(document).ready(function() {
            // Gérer la soumission du formulaire "add-user-to-group" sans rechargement
            $(".add-user-to-group").on("submit", function(e) {
                e.preventDefault(); // Empêche le rechargement de la page
                var form = $(this);
                $.ajax({
                    url: form.attr("action"),
                    type: form.attr("method"),
                    data: form.serialize(),
                    success: function(response) {
                        // Traiter la réponse du serveur (par exemple, mettre à jour la liste des membres)
                        // console.log("User added:", response);
                        alert("User added");
                    },
                    error: function(error) {
                        console.error("Error adding user:", error);
                        alert("An error occurred. Please try again.");
                    }
                });
            });

            // Gérer la soumission du formulaire "delete-user-from-group" sans rechargement
            $(".delete-user-from-group").on("submit", function(e) {
                e.preventDefault(); // Empêche le rechargement de la page
                var form = $(this);
                $.ajax({
                    url: form.attr("action"),
                    type: form.attr("method"),
                    data: form.serialize(),
                    success: function(response) {
                        // Traiter la réponse du serveur (par exemple, mettre à jour la liste des membres)
                        // console.log("User removed:", response);
                        alert("User removed");
                    },
                    error: function(error) {
                        console.error("Error removing user:", error);
                        alert("An error occurred. Please try again.");
                    }
                });
            });
        });

    </script>
<script>
    // Référence au champ input unique
    let fileInput = document.getElementById('fileInput');
    let preview = document.getElementById('preview'); // Conteneur d'aperçu
    
    // Gestion des clics pour chaque bouton
    document.getElementById('cameraBtn').addEventListener('click', function() {
        fileInput.accept = "image/*"; // Autoriser uniquement les images capturées par la caméra
        fileInput.capture = "camera"; // Activer la capture par la caméra
        fileInput.click();
    });
    
    document.getElementById('photosBtn').addEventListener('click', function() {
        fileInput.accept = "image/*"; // Autoriser uniquement les images
        fileInput.removeAttribute('capture');
        fileInput.click();
    });
    
    document.getElementById('audioBtn').addEventListener('click', function() {
        fileInput.accept = "audio/*"; // Autoriser uniquement les fichiers audio
        fileInput.removeAttribute('capture');
        fileInput.click();
    });
    
    document.getElementById('documentsBtn').addEventListener('click', function() {
        fileInput.accept = ".zip,.pdf,.doc,.docx,.txt,.xls,.xlsx,.ppt,.pptx,.txt"; // Documents autorisés
        fileInput.removeAttribute('capture');
        fileInput.click();
    });
    
    // Aperçu des fichiers sélectionnés
    fileInput.addEventListener('change', function(event) {
        preview.innerHTML = ''; // Effacer l'aperçu précédent
        let files = event.target.files;

        for (let i = 0; i < files.length; i++) {
            let file = files[i];
            let fileType = file.type;

            if (fileType.startsWith('image/')) {
                let img = document.createElement('img');
                img.src = URL.createObjectURL(file);
                img.style.maxWidth = '150px'; // Ajustez la taille de l'aperçu
                img.style.marginRight = '10px';
                preview.appendChild(img);
            } 
            else if (fileType.startsWith('video/')) {
                let video = document.createElement('video');
                video.src = URL.createObjectURL(file);
                video.controls = true;
                video.style.maxWidth = '150px'; // Ajustez la taille de l'aperçu
                video.style.marginRight = '10px';
                preview.appendChild(video);
            } 
            else {
                let docIcon = document.createElement('span');
                docIcon.innerHTML = '📄'; // Icône pour les documents
                docIcon.style.fontSize = '50px';
                docIcon.style.marginRight = '10px';
                preview.appendChild(docIcon);
            }
        }
    });
</script>


    <script>
        $(document).ready(function () {
            // Intercepter la soumission du formulaire
            $("#createGroupForm").off("submit").on("submit", function (e) {
                e.preventDefault(); // Empêche le rechargement de la page

                // Récupérer les données du formulaire
                var formData = $(this).serialize(); // Sérialiser les données du formulaire

                // Envoyer la requête AJAX
                $.ajax({
                    url: $(this).attr("action"), // Récupérer l'URL spécifiée dans l'attribut action du formulaire
                    type: $(this).attr("method"), // Récupérer la méthode du formulaire (POST ou GET)
                    data: formData,
                    success: function (response) {
                        // Traiter la réponse du serveur
                        console.log(response); // Afficher la réponse dans la console
                        $("#groupList").html(response); // Mettre à jour uniquement la liste des groupes
                    },
                    error: function (error) {
                        // Gérer les erreurs
                        console.error(error);
                        alert("Une erreur s'est produite. Veuillez réessayer.");
                    },
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#group-member-number').on('click', function() {
                var groupId = $('#group_id').val(); // Récupérer l'ID du groupe sélectionné

                // Appeler une fonction pour récupérer les membres du groupe
                fetchGroupMembers(groupId);
            });
        });

        function fetchGroupMembers(groupId) {
            $.ajax({
                url: '/group-members/' + groupId, // Remplace avec l'URL de ton API
                type: 'GET', // ou 'POST' si nécessaire
                data: { group_id: groupId },
                success: function(response) {
                    if (response.length > 0) {
                        // Remplacer le contenu de la liste avec les membres récupérés
                        updateMemberList(response);
                        // console.log(response);
                    }
                },
                error: function(error) {
                    console.error("Erreur lors de la récupération des membres :", error);
                }
            });
        }

        function updateMemberList(members) {
            var memberList = $('#u-member-list');
            memberList.empty(); // Vider la liste existante

            // Ajouter les membres récupérés
            members.forEach(function(member) {
                memberList.append(`
                    <li class="chat-list">
                        <a href="javascript: void(0);" class="fw-medium d-block">
                            <div class="d-flex align-items-center">
                                <div>
                                    <img src="/assets/images/users/avatar-${member.id}.jpg" class="img-fluid avatar rounded" alt="">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="font-size-15 mb-1">${member.name}</h5>
                                    <p class="text-muted font-size-13 mb-0">${member.role}</p>
                                </div>
                                <div>
                                    <p class="text-muted font-size-13 mb-0">Remove</p>
                                </div>
                            </div>
                        </a>
                    </li>
                `);
            });

            // Mettre à jour le nombre de membres affiché
            $('#span-group-member-number').text(members.length);
        }
    </script>

    <script>
        $(document).ready(function() {
            // Cacher les éléments une fois la page chargée
            $('.default-display-none').hide();
        });
    </script>
    
    <script>
        $(document).ready(function() {
            // Écoute le clic sur les liens avec la classe 'chat-user-link'
            $('.chat-user-link').on('click', function() {

                var elements = document.getElementsByClassName('default-display-none');
                for (var i = 0; i < elements.length; i++) {
                    elements[i].style.display = "block"; // Affiche les éléments masqués
                }
                // Récupérer l'ID de l'utilisateur sélectionné à partir de l'attribut data-user-id
                var userId = $(this).data('user-id');
                var userName = $(this).data('user-name');
                
                // Mettre à jour la valeur de l'input avec l'ID 'receiver_id'
                $('#receiver_id').val(userId);

                document.getElementById('chatName').innerHTML = userName;
                document.getElementById('group-member-number').style.display = "none";


                // Mettre à null la valeur de l'input du group avec l'ID 'group_id'
                $('#group_id').val(null);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
        var elements = document.getElementsByClassName('default-display-none');
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.display = "block";
        }
            // Écoute le clic sur les liens avec la classe 'chat-group-link'
            $('.chat-group-link').on('click', function() {
                // Récupérer l'ID du groupe sélectionné à partir de l'attribut data-group-id
                var groupId = $(this).data('group-id');
                var groupName = $(this).data('group-name');
                var groupMembersNumber = $(this).data('group-member-number');
                
                // Mettre à jour la valeur de l'input avec l'ID 'group_id'
                $('#group_id').val(groupId);

                document.getElementById('chatName').innerHTML = groupName;
                document.getElementById('group-member-number').style.display = "";
                document.getElementById('group-member-number').innerHTML = "+" + groupMembersNumber;
                document.getElementById('span-group-member-number').innerHTML = groupMembersNumber;

                // Mettre à null la valeur de l'input de l'utilisateur avec l'ID 'receiver_id'
                $('#receiver_id').val(null);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.chat-user-link').on('click', function(e) {
                e.preventDefault(); // Empêche le comportement par défaut du lien
                
                const userId = $(this).data('user-id'); // Récupérer l'ID de l'utilisateur depuis l'attribut data
                const authUserId  = {{ Auth::user()->id }};

                // Effectuer une requête AJAX pour récupérer les conversations
                $.ajax({
                    url: '/messages/' + userId,
                    method: 'GET',
                    success: function(data) {
                        // console.log(data);
                       // Vider la liste actuelle des conversations
                        $('#chat-conversation-list').empty();
                        // Variable pour stocker la date du dernier message
                        let lastMessageDate = null;

                        // Parcourir les données et ajouter les conversations à la liste
                        $.each(data, function(index, conversation) {  
                            // Supposons que vous ayez une variable conversation avec une date au format ISO
                            const conversationDate = conversation.created_at; // e.g., "2024-10-14T00:00:00.000000Z"

                            // Créez un objet Date à partir de la chaîne de caractères
                            const date = new Date(conversationDate);

                            // Formatez le jour, le mois et l'année
                            const formattedDate = date.toLocaleDateString('en-EN', {
                                weekday: 'long',
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric'
                            });

                            // Formatez l'heure, les minutes et les secondes
                            const formattedTime = date.toLocaleTimeString([], {
                                hour: '2-digit',
                                minute: '2-digit',
                                second: '2-digit'
                            });

                            // Si la date du message est différente de la dernière, insérer un élément pour la nouvelle date
                            if (lastMessageDate !== formattedDate) {
                                $('#chat-conversation-list').append(`
                                    <li class="chat-list">
                                        <div class="chat-day-title mt-2">
                                            <span class="title border rounded-pill">${formattedDate}</span>
                                        </div>
                                    </li>
                                `);
                                // Mettre à jour la dernière date
                                lastMessageDate = formattedDate;
                            }

                            // Combiner les formats de date et d'heure pour afficher le temps
                            const fullFormattedDateTime = `${formattedTime}`;

                            // Vérification et génération du HTML pour les fichiers
                            let fileHtml = '';
                            if (conversation.files && conversation.files.length > 0) {
                                fileHtml = `<div class="chat-files">
                                    <div class="chat-file">
                                        <ul class="d-flex flex-wrap gap-2 list-inline message-img mb-0">`;
                                conversation.files.forEach(function(file) {
                                    // Vérifiez l'extension du fichier
                                    const fileExtension = file.file_path.split('.').pop().toLowerCase();
                                    // console.log(fileExtension);
                                    if (fileExtension == 'jpeg' || fileExtension == 'jpg' || fileExtension == 'png' || fileExtension == 'gif' || fileExtension == 'webp' || fileExtension == 'svg' || fileExtension == 'bmp' || fileExtension == 'ico') {
                                        fileHtml += `
                                                    <li class="list-inline-item message-img-list me-0">
                                                        <div>
                                                            <a href="/storage/${file.file_path}" class="thumb preview-thumb image-popup" style="padding:0px !important">
                                                                <img src="/storage/${file.file_path}" class="img-fluid" alt="${file.fileName || file.file_path.split('/').pop()}">
                                                            </a>
                                                        </div>
                                                    </li> <!-- end li -->`;
                                        
                                    } else {
                                        fileHtml += `<div class="card shadow-none p-2 mb-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm me-3 ms-0 flex-shrink-0">
                                                                            <div class="avatar-title bg-light text-muted rounded font-size-20">
                                                                                <i class="mdi mdi-file-document-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div class="text-start">
                                                                                <h5 class="font-size-14 mb-1">
                                                                                    ${file.fileName}</h5>
                                                                                <p class="text-muted font-size-13 mb-0">
                                                                                    ${file.fileSize}</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ms-5">
                                                                            <a href="/storage/${file.file_path}" data-dowload-file-id="{{ 'file-id' }}" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download" data-bs-original-title="Download"><i class="mdi mdi-download text-muted fs-5"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>`;                                        
                                    }
                                });
                                fileHtml += `
                                                        </ul>
                                                    </div>
                                                </div>`;
                            }

                            if (conversation.sender_id == authUserId) {
                                $('#chat-conversation-list').append(`
                                    <li class="chat-list right">
                                        <div class="conversation-list">
                                            <div class="d-flex">
                                                <div class="chat-user">
                                                    <img src="${conversation.sender_profile}" class="avatar-sm img-fluid rounded-circle" alt="">
                                                </div>
                                                <div class="flex-1 chat-arrow">
                                                    <div class="d-flex justify-content-end">
                                                        <div class="ctext-wrap">
                                                            <p class="mb-0">${conversation.content}</p>
                                                            ${fileHtml} <!-- Afficher les fichiers s'ils existent -->
                                                        </div>
                                                        <div class="dropdown align-self-end">
                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item fw-medium text-danger delete-chat-item" href="javascript: void(0);"><i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                        ${'You'} <small class="chat-time text-muted fw-medium">${fullFormattedDateTime}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end conversation list -->
                                    </li>
                                `);
                            } else {
                                $('#chat-conversation-list').append(`                                 
                                    <li class="chat-list">
                                        <div class="conversation-list">
                                            <div class="d-flex">
                                                <div class="chat-user">
                                                    <img src="${conversation.receiver_profile}" class="avatar-sm img-fluid rounded-circle" alt="">
                                                </div>
                                                <div class="flex-1 chat-arrow">
                                                    <div class="d-flex">
                                                        <div class="ctext-wrap">
                                                            <p class="mb-0">${conversation.content}</p>
                                                            ${fileHtml} <!-- Afficher les fichiers s'ils existent -->
                                                        </div>
                                                        <div class="dropdown align-self-end">
                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item fw-medium text-danger delete-chat-item" href="javascript: void(0);"><i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                        ${conversation.sender.name} <small class="chat-time text-muted fw-medium">${fullFormattedDateTime}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end conversation list -->
                                    </li>
                                `);                                
                            }
                        });

                    },
                    error: function(err) {
                        console.error(err);
                        alert('Erreur lors du chargement des conversations');
                    }
                });
            });
        });
    </script>
    
    <script>
        $(document).ready(function() {
            $('.chat-group-link').on('click', function(e) {
                e.preventDefault(); // Empêche le comportement par défaut du lien
                
                const groupId = $(this).data('group-id'); // Récupérer l'ID de l'utilisateur depuis l'attribut data
                const authUserId  = {{ Auth::user()->id }};
                // console.log(groupId);
                
                // Effectuer une requête AJAX pour récupérer les conversations
                $.ajax({
                    url: '/groupmessages/' + groupId,
                    method: 'GET',
                    success: function(data) {
                        // console.log(data);
                        // Vider la liste actuelle des conversations
                        $('#chat-conversation-list').empty();
                        // Variable pour stocker la date du dernier message
                        let lastMessageDate = null;

                        // Parcourir les données et ajouter les conversations à la liste
                        $.each(data, function(index, conversation) {  
                            // Supposons que vous ayez une variable conversation avec une date au format ISO
                            const conversationDate = conversation.created_at; // e.g., "2024-10-14T00:00:00.000000Z"

                            // Créez un objet Date à partir de la chaîne de caractères
                            const date = new Date(conversationDate);

                            // Formatez le jour, le mois et l'année
                            const formattedDate = date.toLocaleDateString('en-EN', {
                                weekday: 'long', // Jour de la semaine en lettres
                                year: 'numeric', // Année en chiffres
                                month: 'long', // Mois en lettres
                                day: 'numeric' // Jour en chiffres
                            });

                            // Formatez l'heure, les minutes et les secondes
                            const formattedTime = date.toLocaleTimeString([], {
                                hour: '2-digit',
                                minute: '2-digit',
                                second: '2-digit'
                            });

                            // Si la date du message est différente de la dernière, insérer un élément pour la nouvelle date
                            if (lastMessageDate !== formattedDate) {
                                $('#chat-conversation-list').append(`
                                    <li class="chat-list">
                                        <div class="chat-day-title mt-2">
                                            <span class="title border rounded-pill">${formattedDate}</span>
                                        </div>
                                    </li>
                                `);
                                // Mettre à jour la dernière date
                                lastMessageDate = formattedDate;
                            }

                            // Combiner les formats de date et d'heure pour afficher le temps
                            const fullFormattedDateTime = `${formattedTime}`;
                            
                            if (conversation.sender_id == authUserId) {
                                $('#chat-conversation-list').append(`
                                    <li class="chat-list right">
                                        <div class="conversation-list">
                                            <div class="d-flex">
                                                <div class="chat-user">
                                                    <img src="${conversation.sender_profile}" class="avatar-sm img-fluid rounded-circle" alt="">
                                                </div>
                                                <div class="flex-1 chat-arrow">
                                                    <div class="d-flex justify-content-end">
                                                        <div class="ctext-wrap">
                                                            <p class="mb-0">${conversation.content}</p>
                                                        </div>
                                                        <div class="dropdown align-self-end">
                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item fw-medium text-danger delete-chat-item" href="javascript: void(0);"><i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                        ${'You'} <small class="chat-time text-muted fw-medium">${fullFormattedDateTime}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end conversation list -->
                                    </li>
                                `);                                
                            } else {
                                $('#chat-conversation-list').append(`                                 
                                    <li class="chat-list">
                                        <div class="conversation-list">
                                            <div class="d-flex">
                                                <div class="chat-user">
                                                    <img src="${conversation.receiver_profile}" class="avatar-sm img-fluid rounded-circle" alt="">
                                                </div>
                                                <div class="flex-1 chat-arrow">
                                                    <div class="d-flex">
                                                        <div class="ctext-wrap">
                                                            <p class="mb-0">${conversation.content}</p>
                                                        </div>
                                                        <div class="dropdown align-self-end">
                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item fw-medium text-danger delete-chat-item" href="javascript: void(0);"><i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                        ${conversation.sender.name} <small class="chat-time text-muted fw-medium">${fullFormattedDateTime}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end conversation list -->
                                    </li>
                                `);                                
                            }
                        });

                    },
                    error: function(err) {
                        console.error(err);
                        alert('Erreur lors du chargement des conversations');
                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            // Gérer la soumission du formulaire avec AJAX 
            $('#send-message-form').off("submit").on("submit", function (e) {
                e.preventDefault(); // Empêche le rechargement de la page
    
                var formData = new FormData(this); // Récupère le contenu du formulaire
    
                // Envoyer la requête AJAX pour soumettre le message
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'), // L'URL spécifiée dans le formulaire
                    data: formData,
                    processData: false, // Nécessaire pour envoyer des fichiers
                    contentType: false, // Nécessaire pour l'envoi de fichiers
                    success: function(response) {
                        // Met à jour l'interface avec le nouveau message sans recharger
                        getChatList(response.content, "chat-conversation-list", response.sender);
    
                        // console.log(response.files.file_path);
                        // $(".chat-conversation-list").html(response); // Mettre à jour uniquement la liste des groupes
                        
                        // Efface le champ de message après envoi
                        $('#chat-input').val('');
                        let preview = document.getElementById('preview').innerHTML = ''; // Conteneur d'aperçu
    
                        // Faire défiler jusqu'en bas après l'ajout du message
                        scrollToBottom("chat-conversation-list", "chat-conversation");
                    },
                    error: function(response) {
                        console.log("Erreur lors de l'envoi du message", response);
                    }
                });
            });
        });

        // Fonction pour ajouter le message dans la liste de discussion
        var getChatList = function(message, listId, name) {
            var time = (new Date()).toLocaleTimeString([], { hour: "2-digit", minute: "2-digit" });
            var listElement = document.getElementById(listId);

            // Ajoute une vérification si des fichiers sont attachés
            var fileHtml = '';
            // console.log(message.files);

            // if (message.files && message.files.length > 0) { // Vérifie si des fichiers existent
            //     fileHtml = '<div class="chat-files">';
            //     message.files.forEach(function(file) {
            //         // Ajuster le chemin d'accès à l'image ou au fichier pour le frontend
            //         fileHtml += `<div class="chat-file">
            //                         <a href="/storage/${file.file_path}" target="_blank">Télécharger ${file.file_path.split('/').pop()}</a>
            //                     </div>`;
            //     });
            //     fileHtml += '</div>';
            // }
            // console.log(name);
            

            listElement.insertAdjacentHTML("beforeend", `
                <li class="chat-list right">
                    <div class="conversation-list">
                        <div class="d-flex">
                            <div class="chat-user">
                                <img src="assets/images/users/avatar-10.jpg" class="avatar-sm img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-1 chat-arrow">
                                <div class="d-flex justify-content-end">
                                    <div class="ctext-wrap">
                                        <p class="mb-0">${message}</p>
                                        ${fileHtml} <!-- Afficher les fichiers s'ils existent -->
                                    </div>
                                    <div class="dropdown align-self-end">
                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                <i class="mdi mdi-content-copy me-2"></i>Copy
                                            </a>
                                            <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                <i class="mdi mdi-star-outline me-2"></i>Star
                                            </a>
                                            <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                <i class="mdi mdi-reply-all-outline me-2"></i>Reply
                                            </a>
                                            <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                <i class="mdi mdi-share-all-outline me-2"></i>Forward
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item fw-medium text-danger delete-chat-item" href="javascript: void(0);">
                                                <i class="mdi mdi-trash-can-outline me-2"></i>Delete
                                            </a>
                                        </div>
                                    </div>
                                    <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                        ${name} <small class="chat-time text-muted fw-medium">${time}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            `);

            // Attacher des événements aux nouveaux éléments pour la suppression
            attachDeleteEvent(listElement);
        };
    
        // Fonction pour attacher un événement de suppression
        function attachDeleteEvent(listElement) {
            listElement.querySelectorAll(".delete-chat-item").forEach(function(deleteBtn) {
                deleteBtn.addEventListener("click", function() {
                    var chatItem = deleteBtn.closest(".chat-list");
                    chatItem.remove();
                });
            });
        }
    
        // Fonction pour faire défiler jusqu'en bas de la liste de chats
        function scrollToBottom(listId, wrapperId) {
            var wrapperElement = document.querySelector("#" + wrapperId + " .simplebar-content-wrapper");
            var scrollPosition = document.getElementById(listId) ? document.getElementById(listId).scrollHeight - window.innerHeight + 450 : 0;
    
            if (scrollPosition) {
                wrapperElement.scrollTo({
                    top: scrollPosition,
                    behavior: "smooth"
                });
            }
        }
    </script>
    
    <script>
        Pusher.logToConsole = true;
    
        var pusher = new Pusher('7b58256c7e5bb4ae5d01', {
            cluster: 'eu'
        });
    
        var channel = pusher.subscribe('user-messages');
        const myId = {{ Auth::user()->id }};
        var currentConversationId;
        var currentGroupId;

        document.querySelectorAll('.chat-user-link').forEach(function(element) {
            element.addEventListener('click', function() {
                // Récupérer l'ID de conversation sélectionné à partir de l'attribut data-group-id
                var currentConversationId = this.getAttribute('chat-user-link');   
            });
        });
        
        document.querySelectorAll('.chat-group-link').forEach(function(element) {
            element.addEventListener('click', function() {
                // Récupérer l'ID du groupe sélectionné à partir de l'attribut data-group-id
                var currentGroupId = this.getAttribute('data-group-id');      
            });
        });
    
        channel.bind('user-message', function(data) {
            console.log(JSON.stringify(data));
    
            // Vérifier si le message est pour la discussion courante (privée ou de groupe)
            if (data.conversation_id === currentConversationId || data.group_id === currentGroupId) {
                if (data.sender_id != myId) {
                    
                    // Fonction pour ajouter le message dans la liste de discussion
                        var getChatListIncomming = function(message, files, listId) {
                            let fileHtml = ''; // Initialiser fileHtml
                            if (files.length > 0) {
                                // Boucle pour récupérer chaque file_path
                                files.forEach(function(file) {
                                    // console.log(file.file_path);
                                    // console.log(file.id);
                                    // console.log(file.type);
                                    var filePath = file.file_path; // Assurez-vous que file_path est la bonne clé
                                    var fileId = file.id; // Assurez-vous que id est la bonne clé
                                    var fileType = file.type; // Assurez-vous que type est la bonne clé-
                                    var fileSize = file.size; // Assurez-vous que size est la bonne clé-
                                    // Vérifiez l'extension du fichier
                                    const fileExtension = file.file_path.split('.').pop().toLowerCase();
                                    // console.log(fileExtension);
                                    if (fileExtension == 'jpeg' || fileExtension == 'jpg' || fileExtension == 'png' || fileExtension == 'gif' || fileExtension == 'webp' || fileExtension == 'svg' || fileExtension == 'bmp' || fileExtension == 'ico') {
                                        fileHtml += `<ul class="d-flex flex-wrap gap-2 list-inline message-img mb-2">
                                                        <li class="list-inline-item message-img-list me-0">
                                                            <div>
                                                                <a href="/storage/${file.file_path}" target="_blank" class="thumb preview-thumb image-popup" style="padding:0px !important">
                                                                    <img src="/storage/${file.file_path}" class="img-fluid" alt="${file.file_path || file.file_path.split('/').pop()}" style="border: 1px solid gray; border-radius: 5px">
                                                                </a>
                                                            </div>
                                                        </li> <!-- end li -->
                                                    </ul>`;
                                    }else{
                                        fileHtml += `<div class="card shadow-none p-2 mb-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm me-3 ms-0 flex-shrink-0">
                                                                            <div class="avatar-title bg-light text-muted rounded font-size-20">
                                                                                <i class="mdi mdi-file-document-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div class="text-start">
                                                                                <h5 class="font-size-14 mb-1">
                                                                                    ${file.file_path}</h5>
                                                                                <p class="text-muted font-size-13 mb-0">
                                                                                    ${file.size}</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ms-5">
                                                                            <a href="/storage/${file.file_path}" target="_blank" data-dowload-file-id="{{ 'file-id' }}" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download" data-bs-original-title="Download"><i class="mdi mdi-download text-muted fs-5"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>`;                                        
                                    }
                            });
                        }
                            
                        var time = (new Date()).toLocaleTimeString([], { hour: "2-digit", minute: "2-digit" });
                        var listElement = document.getElementById(listId);
                
                        listElement.insertAdjacentHTML("beforeend", `
                            <li class="chat-list">
                                <div class="conversation-list">
                                    <div class="d-flex">
                                        <div class="chat-user">
                                            <img src="assets/images/users/avatar-10.jpg" class="avatar-sm img-fluid rounded-circle" alt="">
                                        </div>
                                        <div class="flex-1 chat-arrow">
                                            <div class="d-flex justify-content-end">
                                                <div class="ctext-wrap">
                                                    <p class="mb-0">${message ?? ""}</p>
                                                    <p class="mb-0">${fileHtml ?? ""}</p>
                                                </div>
                                                <div class="dropdown align-self-end">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                            <i class="mdi mdi-content-copy me-2"></i>Copy
                                                        </a>
                                                        <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                            <i class="mdi mdi-star-outline me-2"></i>Star
                                                        </a>
                                                        <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                            <i class="mdi mdi-reply-all-outline me-2"></i>Reply
                                                        </a>
                                                        <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                            <i class="mdi mdi-share-all-outline me-2"></i>Forward
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item fw-medium text-danger delete-chat-item" href="javascript: void(0);">
                                                            <i class="mdi mdi-trash-can-outline me-2"></i>Delete
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                    ${data.user.name} <small class="chat-time text-muted fw-medium">${time}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        `);
                
                        // Attacher des événements aux nouveaux éléments pour la suppression
                        attachDeleteEvent(listElement);
                    };
                    // Ajouter le message à la discussion courante (côté gauche)
                    getChatListIncomming(data.content, data.files, "chat-conversation-list");

                    // Faire défiler jusqu'en bas après l'ajout du message
                    scrollToBottom("chat-conversation-list", "chat-conversation");
                }
            } else {
                // Afficher une notification pour des messages dans une autre discussion
                // Exemple : mettre à jour un compteur de messages non lus
                updateUnreadMessageCounter(data.conversation_id);
            }
        });
    
        // Fonction pour mettre à jour le compteur de messages non lus
        function updateUnreadMessageCounter(conversationId) {
            var counter = document.getElementById("unread-counter-" + conversationId);
            if (counter) {
                var count = parseInt(counter.innerText, 10) || 0;
                counter.innerText = count + 1;
            }
        }
    </script>
    
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Metismenu Js -->
    <script src="{{ asset('assets/libs/metismenujs/metismenujs.min.js') }}"></script>

    <!-- Simplebar Js -->
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

    <!-- Feather Js -->
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>


    <!-- ligntbox -->
    <script src="{{ asset('assets/libs/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/lightbox.init.js') }}"></script>

    @endsection
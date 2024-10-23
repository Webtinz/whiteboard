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

    @include('ak_dir.chat.chat_script.chat_scripts')
    
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
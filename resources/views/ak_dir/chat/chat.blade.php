@extends('layouts.dashboardlayout')
@section('links')
    <!-- lightbox css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/glightbox/css/glightbox.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
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
        #page-content-chat {
            min-height: 50vh; /* Hauteur minimale : 50% de la hauteur de la fenêtre */
            max-height: 100vh; /* Hauteur maximale : 100% de la hauteur de la fenêtre */
            overflow-y: auto; /* Permet le scroll interne si le contenu dépasse */
            scrollbar-width: none; /* Pour cacher la barre de défilement sur Firefox */
            /* background-color: white; Fond blanc */
            /* padding: 0px; Optionnel, pour un peu d'espace intérieur */
        }
    </style>
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
</head>

    <div class="page-content" style="padding: 5px !important;">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Chat</h4>

            <div class="page-content" style="padding: 5px !important;">
                <div class="container-fluid" id="page-content-chat">

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
                                        <ul class="list-unstyled chat-list group-chat">
                                            @forelse ($groupConversations as $groupId => $groupData)
                                                <li>
                                                    <a href="javascript: void(0);" class="fw-medium d-block chat-group-link" data-group-id="{{ $groupData['group']->id }}" data-group-name="{{ $groupData['group']->name }}" data-group-member-number="{{ $groupData['number_of_members'] }}">
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
                                <ul class="list-unstyled chat-list group-chat">
                                    @forelse ($groupConversations as $groupId => $groupData)
                                        <li>
                                            <a href="javascript: void(0);" class="fw-medium d-block chat-group-link" data-group-id="{{ $groupData['group']->id }}" data-group-name="{{ $groupData['group']->name }}" data-group-member-number="{{ $groupData['number_of_members'] }}">
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
                                                    {{ $otherUser->name == Auth::user()->name ? "Yourself" : $otherUser->name }}
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
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-plus fs-3"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item fw-medium text-muted"
                                                                href="javascript: void(0);">
                                                                <i class="mdi mdi-camera-outline me-2"></i>Camera</a>
                                                            <a class="dropdown-item fw-medium text-muted"
                                                                href="javascript: void(0);">
                                                                <i
                                                                    class="mdi mdi-image-multiple-outline me-2"></i>Photos</a>
                                                            <a class="dropdown-item fw-medium text-muted"
                                                                href="javascript: void(0);">
                                                                <i
                                                                    class="mdi mdi-map-marker-outline me-2"></i>Locations</a>
                                                            <a class="dropdown-item fw-medium text-muted"
                                                                href="javascript: void(0);">
                                                                <i
                                                                    class="mdi mdi-file-document-outline me-2"></i>Documents</a>
                                                            <a class="dropdown-item fw-medium text-muted"
                                                                href="javascript: void(0);">
                                                                <i
                                                                    class="mdi mdi-account-box-outline me-2"></i>Contact</a>
                                                        </div>
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col">
                                                    <input type="hidden" name="receiver_id" id="receiver_id" value="{{ Auth::user()->id }}"
                                                        class="@error('receiver_id') is-invalid @enderror">
                                                    @error('receiver_id')
                                                        {{ $message }}
                                                    @enderror
                                                    <input type="hidden" name="group_id" id="group_id" value=""
                                                        class="@error('group_id') is-invalid @enderror">
                                                    @error('group_id')
                                                        {{ $message }}
                                                    @enderror
                                                    <div class="position-relative">
                                                        <input type="text" name="content"
                                                            class="form-control chat-input task-comment"
                                                            id="chat-input"
                                                            placeholder="Type your message here..."
                                                            class="@error('content') is-invalid @enderror">
                                                            @error('content')
                                                                {{ $message }}
                                                            @enderror
                                                        <div class="chat-input-links" id="tooltip-container">
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item"><a
                                                                        href="javascript: void(0);" title="Emoji">
                                                                        <i class="mdi mdi-emoticon-happy-outline"></i></a>
                                                                </li>
                                                            </ul><!-- end ul -->
                                                        </div>
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-auto">
                                                    <div class="d-flex gap-3">
                                                        {{-- <i class="mdi mdi-microphone fs-3 text-muted align-middle"></i> --}}
                                                        <button type="submit"
                                                            class="btn btn-primary btn-rounded shadow-none chat-send">
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
                                <input type="text" class="form-control" id="GroupName" placeholder="Enter Name">
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
                            <button type="button" class="btn btn-soft-primary">Create Group</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
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
                            <h5 class="modal-title font-size-16 text-primary" id="groupDetailModal"># Welcome</h5>
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

                        <div>
                            <div class="chat-conversation py-3" id="chat-conversation" data-simplebar
                                style="max-height: 602px; margin-bottom:25px;">
                                <ul class="list-unstyled mb-0 px-3 chat-conversation-list" id="chat-conversation-list">

                                </ul><!-- end ul -->
                            </div>

                            <div class="tab-content pt-3">
                                <div class="tab-pane show active" id="members" data-simplebar
                                    style="max-height: 264px;">
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
                                                        <h5 class="font-size-15 mb-0">Add people</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end li -->
                                        <li class="chat-list">
                                            <a href="javascript: void(0);" class="fw-medium d-block">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                                            class="img-fluid avatar rounded" alt="">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="font-size-15 mb-1">Jansh wells</h5>
                                                        <p class="text-muted font-size-13 mb-0">Web Developer</p>
                                                    </div>
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-0">Remove</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end li -->
                                        <li class="chat-list">
                                            <a href="javascript: void(0);" class="fw-medium member-list d-block">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('assets/images/users/avatar-5.jpg') }}"
                                                            class="img-fluid avatar rounded" alt="">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="font-size-15 mb-1">Ayaan Curry</h5>
                                                        <p class="text-muted font-size-13 mb-0">Python Developer</p>
                                                    </div>
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-0">Remove</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end li -->
                                    </ul><!-- end ul -->
                                </div><!-- end -->
                            </div>
                        </div><!-- /.modal body -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-soft-primary">Done</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->

    {{-- <script src="{{ asset('assets/js/pages/chat.init.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
    
    <script>
        $(document).ready(function() {
            $('.chat-group-link').on('click', function(e) {
                e.preventDefault(); // Empêche le comportement par défaut du lien
                
                const groupId = $(this).data('group-id'); // Récupérer l'ID de l'utilisateur depuis l'attribut data
                const authUserId  = {{ Auth::user()->id }};
        
                // Effectuer une requête AJAX pour récupérer les conversations
                $.ajax({
                    url: '/groupmessages/' + groupId,
                    method: 'GET',
                    success: function(data) {
                        console.log(data);
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
            $('form').on('submit', function(e) {
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
                        getChatList(response.content, "chat-conversation-list");
    
                        // Efface le champ de message après envoi
                        $('#chat-input').val('');
    
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
        var getChatList = function(message, listId) {
            var time = (new Date()).toLocaleTimeString([], { hour: "2-digit", minute: "2-digit" });
            var listElement = document.getElementById(listId);
    
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
                                        Jansh Wells <small class="chat-time text-muted fw-medium">${time}</small>
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
                    var getChatListIncomming = function(message, listId) {
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
                                                    <p class="mb-0">${message}</p>
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
                                                    Jansh Wells <small class="chat-time text-muted fw-medium">${time}</small>
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
                    getChatListIncomming(data.content, "chat-conversation-list");

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
                        <input type="text" class="form-control" id="GroupName" placeholder="Enter Name">
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
                    <button type="button" class="btn btn-soft-primary">Create Group</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
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
                    <h5 class="modal-title font-size-16 text-primary" id="groupDetailModal"># Welcome</h5>
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
                                                <h5 class="font-size-15 mb-0">Add people</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li><!-- end li -->
                                <li class="chat-list">
                                    <a href="javascript: void(0);" class="fw-medium d-block">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                                    class="img-fluid avatar rounded" alt="">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="font-size-15 mb-1">Jansh wells</h5>
                                                <p class="text-muted font-size-13 mb-0">Web Developer</p>
                                            </div>
                                            <div>
                                                <p class="text-muted font-size-13 mb-0">Remove</p>
                                            </div>
                                        </div>
                                    </a>
                                </li><!-- end li -->
                                <li class="chat-list">
                                    <a href="javascript: void(0);" class="fw-medium member-list d-block">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('assets/images/users/avatar-5.jpg') }}"
                                                    class="img-fluid avatar rounded" alt="">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="font-size-15 mb-1">Ayaan Curry</h5>
                                                <p class="text-muted font-size-13 mb-0">Python Developer</p>
                                            </div>
                                            <div>
                                                <p class="text-muted font-size-13 mb-0">Remove</p>
                                            </div>
                                        </div>
                                    </a>
                                </li><!-- end li -->
                            </ul><!-- end ul -->
                        </div><!-- end -->
                    </div>
                </div><!-- /.modal body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-soft-primary">Done</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
@endsection
@section('js')
      {{-- <script src="{{ asset('assets/js/pages/chat.init.js') }}"></script> --}}
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
                              // Combiner les formats de date et d'heure
                              const fullFormattedDateTime = `${formattedDate} at ${formattedTime}`;
                              
                              $('#chat-conversation-list').append(`
                                  <li class="chat-list ${conversation.sender_id == authUserId ? 'right' : ''}">
                                      <div class="conversation-list">
                                          <div class="d-flex">
                                              <div class="chat-user">
                                                  <img src="${conversation.sender_id == authUserId ? conversation.sender_profile : conversation.receiver_profile}" class="avatar-sm img-fluid rounded-circle" alt="">
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
                                                      ${conversation.sender_id == authUserId ? 'You' : conversation.sender.name} <small class="chat-time text-muted fw-medium">${fullFormattedDateTime}</small>
                                                  </div>
                                              </div>
                                          </div>
                                      </div><!-- end conversation list -->
                                  </li><!-- end li -->
                              `);
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
          
                  // Effectuer une requête AJAX pour récupérer les conversations
                  $.ajax({
                      url: '/groupmessages/' + groupId,
                      method: 'GET',
                      success: function(data) {
                          console.log(data);
                          // Vider la liste actuelle des conversations
                          $('#chat-conversation-list').empty();
                          
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
                              // Combiner les formats de date et d'heure
                              const fullFormattedDateTime = `${formattedDate} at ${formattedTime}`;
                              
                              $('#chat-conversation-list').append(`
                                  <li class="chat-list ${conversation.sender_id == authUserId ? 'right' : ''}">
                                      <div class="conversation-list">
                                          <div class="d-flex">
                                              <div class="chat-user">
                                                  <img src="${conversation.sender_profile}" class="avatar-sm img-fluid rounded-circle" alt="">
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
                                                      ${conversation.sender_id == authUserId ? 'You' : conversation.sender.name} <small class="chat-time text-muted fw-medium">${fullFormattedDateTime}</small>
                                                  </div>
                                              </div>
                                          </div>
                                      </div><!-- end conversation list -->
                                  </li><!-- end li -->
                              `);
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
              $('form').on('submit', function(e) {
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
                          getChatList(response.content, "chat-conversation-list");
      
                          // Efface le champ de message après envoi
                          $('#chat-input').val('');
      
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
          var getChatList = function(message, listId) {
              var time = (new Date()).toLocaleTimeString([], { hour: "2-digit", minute: "2-digit" });
              var listElement = document.getElementById(listId);
      
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
                                  </div>
                                  <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                      Jansh Wells <small class="chat-time text-muted fw-medium">${time}</small>
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
  
      <!-- custom js -->
      {{-- <script src="{{ asset('assets/js/app.js') }}"></script> --}}
@endsection

    <!-- custom js -->
    {{-- <script src="{{ asset('assets/js/app.js') }}"></script> --}}


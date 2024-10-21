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
                        <h4 class="mb-0">{{ $project->name }} Files</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active"><a href="#" class="btn btn-soft-primary" data-bs-toggle="modal"
                                    data-bs-target=".bs-example-new-project" onclick="addProjects()"><i
                                        class="mdi mdi-plus me-1"></i> Add File</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="modal fade bs-example-new-project" tabindex="-1" role="dialog" aria-labelledby="addProjectModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header bg-soft-primary">
                    <h5 class="modal-title font-size-16 text-primary add-project-title">Add New File</h5>
                    <button type="button" class="btn-close" id="update-team" data-bs-dismiss="modal"
                        aria-label="Close">
                    </button>
                </div>
                <div class="modal-body p-4">
                    <form id="NewtaskForm" action="{{ route('files.store', $project->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="projectName" class="col-sm-2 col-form-label pt-0 pt-sm-2">File</label>
                            <div class="col-sm-10">
                                <input name="file" class="form-control" type="file" multiple="multiple">
                            </div>
                        </div><!-- end row -->
                    
                        <div class="row mb-3 mt-3 mt-xl-0">
                            <label class="col-sm-2 col-form-label pt-0 pt-sm-2">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" data-trigger name="type" id="team-status">
                                    <option value="">Choose...</option>
                                    <option value="Requirement">Requirement</option>
                                    <option value="Documentation">Documentation</option>
                                    <option value="Image">Image</option>
                                </select>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal" id="cancelMember">Cancel</button>
                            <button type="submit" class="btn btn-soft-primary">Add File</button>
                        </div><!-- /.modal-footer -->
                    </form>                        
                </div>


            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


            <div class="d-xl-flex">
                <div class="w-100">
                    <div class="d-md-flex">

                        <div class="w-100">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mt-4">
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <input type="text" id="searchInput" class="form-control" placeholder="Search by name...">
                                            </div>
                                            <div class="col-md-3">
                                                <select id="sortOrder" class="form-select">
                                                    <option value="newest">Lastest</option>
                                                    <option value="oldest">Oldest</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <select id="typeFilter" class="form-select">
                                                    <option value="">All</option>
                                                    <!-- Ajoutez dynamiquement les options en PHP -->
                                                    @foreach($files->pluck('type')->unique() as $type)
                                                        <option value="{{ $type }}">{{ $type }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                                                                    
                                        <div class="table-responsive">
                                            <table class="table align-middle mb-0" id="filesTable">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2" scope="col">Name</th>
                                                        <th scope="col">Date Modified</th>
                                                        <th scope="col" colspan="2">Type</th>
                                                    </tr><!-- end tr -->
                                                </thead><!-- end thead -->
                                                <tbody>
                                                    @foreach ($files as $file)
                                                        <tr id="recent-item-1">
                                                            <td style="width: 10px;">
                                                                <div class="avatar-sm">
                                                                    <span
                                                                        class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                                        <i class="fas fa-file-alt"></i>
                                                                    </span>
                                                                </div>
                                                            </td><!-- end td -->
                                                            <td>
                                                                <a href="{{ route('files.view', $file->id) }}" target="_blank" class="text-dark fw-medium">
                                                                    {{$file->name}}
                                                                </a>
                                                                
                                                                <a class="font-size-16 text-muted dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                                                   aria-haspopup="true"><i class="mdi mdi-dots-vertical"></i></a>
                                                                <div class="dropdown mb-2">
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item text-muted fw-medium" href="{{ route('files.download', $file->id)}}">
                                                                            <i class="mdi mdi-download me-2"></i>Download
                                                                        </a>
                                                                        <a class="dropdown-item text-danger fw-medium delete-item" href="#" data-id="{{ $file->id }}" data-bs-toggle="modal" data-bs-target="#confirmDeleteFileModal">
                                                                            <i class="mdi mdi-trash-can-outline me-2"></i> Delete
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!-- end td -->
                                                            <td>{{$file->updated_at}}</td><!-- end td -->
                                                            <td>{{$file->type}}</td><!-- end td -->
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="#"
                                                                        class="font-size-16 text-muted dropdown-toggle"
                                                                        role="button" data-bs-toggle="dropdown"
                                                                        aria-haspopup="true">
                                                                        <i class="uil uil-ellipsis-h"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item"
                                                                            href="javascript: void(0);">Open</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript: void(0);">Edit</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript: void(0);">Rename</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item delete-item"
                                                                            data-id="recent-item-1"
                                                                            href="javascript: void(0);">Remove</a>
                                                                    </div>
                                                                </div>
                                                            </td><!-- end td -->
                                                        </tr><!-- end tr -->
                                                    @endforeach
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        </div><!-- end table responsive -->
                                    </div>
                                </div><!-- end cardbody-->
                            </div><!-- end card -->
                        </div><!-- end w-100 -->
                    </div>
                </div>
            </div><!-- end row -->

            <!-- Right Side Offcanvas -->
            <div>
                <div class="offcanvas file-info offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header border-bottom border-light">
                        <h6 class="text-muted mb-0" id="offcanvasRightLabel"><i
                                class="far fa-file-alt me-2"></i>File Information</h6>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="bg-light py-5 rounded-3 border text-center">
                            <i class="mdi mdi-file-pdf-outline display-1 text-primary"></i>
                        </div>
                        <div class="mt-4">
                            <span class="badge bg-success px-2">PDF</span>
                            <h5 class="fw-medium font-size-16 mt-2 pb-2">Update Projects and File list</h5>
                        </div>
                        <hr>
                        <div class="py-2">
                            <h5 class="font-size-15">Description</h5>
                            <p class="text-muted mb-0">I will give you complete account of the system, expound the
                                actual teachings of the great explorer of the truth, the master-builder of human
                                happiness.</p>
                        </div>
                        <hr>
                        <div class="pt-2">
                            <h6 class="font-size-15 mb-2">Information</h6>
                            <div class="table-responsive">
                                <table class="table table-borderless table-sm mb-0">
                                    <tbody>
                                        <tr>
                                            <th class="text-muted font-size-14"><i
                                                    class="mdi mdi-circle-medium fs-5 align-middle text-info me-1"></i>Created
                                                By</th>
                                            <th class="text-end font-size-13">Denny Silvan</th>
                                        </tr>
                                        <tr>
                                            <th class="text-muted font-size-14"><i
                                                    class="mdi mdi-circle-medium fs-5 align-middle text-info me-1"></i>Modified
                                                At</th>
                                            <th class="text-end font-size-13">22 Jun , 2021</th>
                                        </tr>
                                        <tr>
                                            <th class="text-muted font-size-14"><i
                                                    class="mdi mdi-circle-medium fs-5 align-middle text-info me-1"></i>Size
                                            </th>
                                            <th class="text-end font-size-13">486.67 KB</th>
                                        </tr>
                                        <tr>
                                            <th class="text-muted font-size-14"><i
                                                    class="mdi mdi-circle-medium fs-5 align-middle text-info me-1"></i>Type
                                            </th>
                                            <th class="text-end font-size-13">PDF</th>
                                        </tr>
                                    </tbody><!-- end tbody -->
                                </table><!-- end table -->
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-around pt-2">
                            <div>
                                <div class="avatar">
                                    <span class="avatar-title bg-soft-primary text-primary rounded-3">
                                        <i class="mdi mdi-export-variant mdi-24px"></i>
                                    </span>
                                </div>
                                <div class="text-center mt-2">
                                    <p class="text-muted font-size-12 fw-medium mb-0">Share</p>
                                </div>
                            </div>
                            <!-- end -->
                            <div>
                                <div class="avatar">
                                    <span class="avatar-title bg-soft-success text-success rounded-3">
                                        <i class="mdi mdi-file-edit-outline mdi-24px"></i>
                                    </span>
                                </div>
                                <div class="text-center mt-2">
                                    <p class="text-muted font-size-12 fw-medium mb-0">Edit</p>
                                </div>
                            </div>
                            <!-- end -->
                            <div>
                                <div class="avatar">
                                    <span class="avatar-title bg-soft-danger text-danger rounded-3">
                                        <i class="mdi mdi-trash-can-outline mdi-24px"></i>
                                    </span>
                                </div>
                                <div class="text-center mt-2">
                                    <p class="text-muted font-size-12 fw-medium mb-0">Delete</p>
                                </div>
                            </div>
                            <!-- end -->
                        </div>
                    </div><!-- end offcanvas body-->
                </div><!-- end offcanvas-->
            </div>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!-- Modal de confirmation -->
<div class="modal fade" id="confirmDeleteFileModal" tabindex="-1" aria-labelledby="confirmDeleteFileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteFileModalLabel">Confirm deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this project? This action cannot be undone.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="#" id="confirmDeleteFileButton" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>


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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const typeFilter = document.getElementById('typeFilter');
        const sortOrder = document.getElementById('sortOrder');
        const table = document.getElementById('filesTable');
        const tbody = table.querySelector('tbody');
        const rows = Array.from(tbody.querySelectorAll('tr'));
    
        function filterAndSortTable() {
            const searchText = searchInput.value.toLowerCase();
            const selectedType = typeFilter.value.toLowerCase();
            const isNewestFirst = sortOrder.value === 'newest';
    
            const filteredRows = rows.filter(row => {
                const name = row.querySelector('td:nth-child(2) a').textContent.toLowerCase();
                const type = row.querySelector('td:nth-child(4)').textContent.toLowerCase();
                
                const nameMatch = name.includes(searchText);
                const typeMatch = selectedType === '' || type === selectedType;
    
                return nameMatch && typeMatch;
            });
    
            filteredRows.sort((a, b) => {
                const dateA = new Date(a.querySelector('td:nth-child(3)').textContent);
                const dateB = new Date(b.querySelector('td:nth-child(3)').textContent);
                return isNewestFirst ? dateB - dateA : dateA - dateB;
            });
    
            tbody.innerHTML = '';
            filteredRows.forEach(row => tbody.appendChild(row));
        }
    
        searchInput.addEventListener('input', filterAndSortTable);
        typeFilter.addEventListener('change', filterAndSortTable);
        sortOrder.addEventListener('change', filterAndSortTable);
    
        // Initial sort
        filterAndSortTable();
    });
    </script>
    
    <script>
         document.addEventListener('DOMContentLoaded', function() {
    Dropzone.options.myDropzone = {
        maxFilesize: 5, // taille maximale du fichier (en MB)
        acceptedFiles: ".jpeg,.jpg,.png,.pdf,.docx", // types de fichiers acceptés
        previewsContainer: "#file-previews", // Conteneur d'aperçu des fichiers
        previewTemplate: document.querySelector('#uploadPreviewTemplate').innerHTML,
        addRemoveLinks: true,
        dictRemoveFile: "Supprimer",
        init: function() {
            this.on("success", function(file, response) {
                console.log(response);
                // Vérifie que la réponse est correcte et recharger la page
                if (response.success) { // Assure-toi que le serveur renvoie un indicateur de succès
                    location.reload(); // Recharge la page
                }
            });
    
            this.on("error", function(file, errorMessage) {
                console.error("Erreur lors de l'upload:", errorMessage);
                // Optionnel: Gérer l'erreur ici, par exemple afficher un message d'erreur
            });
        }
    };
    });
    
    </script>
    <script>
        // Écouter le clic sur le lien de suppression des fichiers
        document.querySelectorAll('.delete-item').forEach(function(item) {
            item.addEventListener('click', function() {
                // Récupérer l'ID du fichier
                var fileId = this.getAttribute('data-id');
                // Construire l'URL de suppression
                var deleteUrl = "{{ route('files.delete', '') }}/" + fileId;
                // Mettre à jour le bouton de confirmation
                document.getElementById('confirmDeleteFileButton').setAttribute('href', deleteUrl);
            });
        });
    </script>
    
@endsection
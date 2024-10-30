@extends('layouts.dashboardlayout')

@section('links')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Sweetalert2 CSS -->
    <link href="{{ asset('asset/vendors/%40sweetalert2/theme-bootstrap-4/bootstrap-4.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Colorpicker -->
    <link href="{{ asset('asset/vendors/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Calendar CSS -->
    <link href="{{ asset('asset/vendors/fullcalendar/main.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Daterangepicker CSS -->
    <link href="{{ asset('asset/vendors/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />

    <!-- CSS -->
    <link href="{{ asset('asset/dist/css/style.css') }}" rel="stylesheet" type="text/css">
    {{-- <style>
        body {
            margin: 40px 10px;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 1100px;
            margin: 0 auto;
        }
    </style> --}}
@endsection

@section('content')
    <div class="main-content mt-5">
        <!-- Calendar Drawer -->
        <div class="hk-drawer calendar-drawer drawer-right">
            <div>
                <div class="drawer-header">
                    <div class="drawer-header-action">
                        <a href="#" id="edit_event"
                            class="btn btn-sm btn-icon btn-flush-secondary btn-rounded flush-soft-hover"><span
                                class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>
                        <a href="#" id="del_event"
                            class="btn btn-sm btn-icon btn-flush-secondary btn-rounded flush-soft-hover"><span
                                class="icon"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
                        <button type="button" class="drawer-close btn-close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Calendar Drawer -->

        <!-- Page Body -->
        <div class="hk-pg-body py-0">
            <div class="calendarapp-wrap">
                <nav class="calendarapp-sidebar">
                    <div data-simplebar class="nicescroll-bar">
                        <div class="menu-content-wrap">
                            <button class="btn btn-primary btn-rounded btn-block dropdown-toggle" data-bs-toggle="modal"
                                data-bs-target="#create_new_event">Create</button>

                            <div class="text-center mt-4">
                                <div id="inline_calendar" class="d-inline-block">
                                    <input class="form-control invisible position-absolute" type="text" name="calendar"
                                        value="" />
                                </div>
                            </div>
                            <div class="separator separator-light"></div>
                            <div class="title-sm text-primary">Upcoming Taks</div>
                            <div class="upcoming-event-wrap">
                                <ul class="nav nav-light navbar-nav flex-column">
                                    @foreach ($tasks as $task)
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="badge badge-violet badge-indicator badge-indicator-lg me-2"></span>
                                                    <span class="event-time">{{ $task->start_date }}
                                                        {{ $task->location_type }}</span>
                                                </div>
                                                <div class="event-name">{{ $task->title }}</div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="calendarapp-content">
                    <div id="calendar" class="w-100"></div>
                </div>

                <!-- New Event -->
                <div id="create_new_event" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h5 class="mb-4">Create New Task</h5>
                                <form>
                                    <div class="row gx-3">
                                        <div class="col-sm-12 form-group">
                                            <label class="form-label">Name</label>
                                            <input class="form-control  cal-event-name" type="text" />
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-12 form-group">
                                            <div class="form-label-group">
                                                <label>Note/Description</label>
                                            </div>
                                            <textarea id="event_description_val" class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Start Date</label>
                                                <input class="form-control cal-event-date-start" id="start_date"
                                                    name="single-date-pick" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Start Time</label>
                                                <input class="form-control input-single-timepicker" id="start_time"
                                                    name="input-timepicker" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">End Date</label>
                                                <input class="form-control cal-event-date-end" id="end_date"
                                                    name="single-date-pick" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">End Time</label>
                                                <input class="form-control input-single-timepicker" id="end_time"
                                                    type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <label class="form-label">Status</label>
                                        <div class="form-group">
                                            <div class="d-flex align-item-end mr-2">
                                                <select class="form-control" name="location_type" id="location_type">
                                                    <option value="scheduled">Schedule</option>
                                                    <option value="started">Started</option>
                                                    <option value="done">Done</option>
                                                </select>
                                                <div class="input-group color-picker w-auto">
                                                    <span
                                                        class="input-group-text colorpicker-input-addon rounded-3"><i></i></span>
                                                    <input type="text" id="event_color_val"
                                                        class="form-control cal-event-color w-0 h-0 position-absolute opacity-0"
                                                        value="#009B84" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <label class="form-label">Public or Private: </label> <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="public_or_private" id="edit-public" value="public" checked>
                                                <label class="form-check-label" for="public">Public</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="public_or_private" id="edit-private" value="private">
                                                <label class="form-check-label" for="private">Private</label>
                                            </div>
                                        </div>
                                    </div>          
                                    
                                    <!-- Conteneur pour afficher les utilisateurs sélectionnés -->
                                    <div id="edit-selected_users_container" class="mb-3"></div>
                                    
                                    <!-- Champ spécifique pour les utilisateurs privés -->
                                    <div class="row gx-3" id="edit-specific_users_field" style="display:none;">
                                        <div class="col-sm-12">
                                            <label class="form-label">Specific Users</label>
                                            <select class="form-control" id="edit-specific_users" name="specific_users[]" multiple>
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>    
                                    
                                    {{-- <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-inline">
                                                <div class="form-group mt-3">
                                                    <label class="form-label">Priority:</label>
                                                    <div class="form-check form-check-inline">
                                                        <div class="form-check">
                                                            <input type="radio" id="customRadioc1" name="priority"
                                                                class="form-check-input" value="urgent" checked="">
                                                            <label class="form-check-label"
                                                                for="customRadioc1">Urgent</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="form-check">
                                                            <input type="radio" value="high" id="customRadioc2"
                                                                name="priority" class="form-check-input">
                                                            <label class="form-check-label"
                                                                for="customRadioc2">High</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="form-check">
                                                            <input type="radio" value="medium" id="customRadioc3"
                                                                name="priority" class="form-check-input">
                                                            <label class="form-check-label"
                                                                for="customRadioc3">Medium</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="form-check">
                                                            <input type="radio" value="low" id="customRadioc4"
                                                                name="priority" class="form-check-input">
                                                            <label class="form-check-label"
                                                                for="customRadioc4">Low</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </form>
                                <div class="modal-footer align-items-center">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                                    <button id="add_event" type="button" class="btn btn-primary fc-addEventButton-button"
                                        data-bs-dismiss="modal">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /New Event -->

                <!-- Edit Event -->
                <div id="edit_event_modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h5 class="mb-4">Edit Task</h5>
                                <form>
                                    <div class="row gx-3">
                                        <div class="col-sm-12 form-group">
                                            <label class="form-label">Name</label>
                                            <input class="form-control  cal-event-named"
                                                type="text" />
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-12 form-group">
                                            <div class="form-label-group">
                                                <label>Note/Description</label>
                                            </div>
                                            <textarea class="form-control cal-event-description" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Start Date</label>
                                                <input class="form-control cal-event-date-startd"
                                                    name="single-date-pick" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Start Time</label>
                                                <input class="form-control input-single-timepicker time"
                                                 name="input-timepicker" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">End Date</label>
                                                <input class="form-control cal-event-date-endd"
                                                    name="single-date-pick" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">End Time</label>
                                                <input class="form-control input-single-timepicker time"
                                                 type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <label class="form-label">Status</label>
                                        <div class="form-group">
                                            <div class="d-flex align-item-end mr-2">
                                                <select class="form-control" name="location_type">
                                                    <option value="scheduled">Schedule</option>
                                                    <option value="started">Started</option>
                                                    <option value="done">Done</option>
                                                </select>
                                                <div class="input-group color-picker w-auto">
                                                    <span
                                                        class="input-group-text colorpicker-input-addon rounded-3"><i></i></span>
                                                    <input type="text" id="event_color_val"
                                                        class="form-control cal-event-color w-0 h-0 position-absolute opacity-0"
                                                        value="#009B84" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <label class="form-label">Public or Private: </label> <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="public_or_privated" id="edit-publicd" value="public" checked>
                                                <label class="form-check-label" for="public">Public</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="public_or_privated" id="edit-privated" value="private">
                                                <label class="form-check-label" for="private">Private</label>
                                            </div>
                                        </div>
                                    </div>          
                                    
                                    <!-- Conteneur pour afficher les utilisateurs sélectionnés -->
                                    <div id="edit-selected_users_container" class="mb-3"></div>
                                    
                                    <!-- Champ spécifique pour les utilisateurs privés -->
                                    <div class="row gx-3" id="edit-specific_users_fieldd" style="display:none;">
                                        <div class="col-sm-12">
                                            <label class="form-label">Specific Users</label>
                                            <select class="form-control" name="specific_usersd[]" multiple>
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    

                                    {{-- <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-inline">
                                                <div class="form-group mt-3">
                                                    <label class="form-label">Priority:</label>
                                                    <div class="form-check form-check-inline">
                                                        <div class="form-check">
                                                            <input type="radio" id="customRadioc1" name="priority"
                                                                class="form-check-input" value="urgent" checked="">
                                                            <label class="form-check-label"
                                                                for="customRadioc1">Urgent</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="form-check">
                                                            <input type="radio" value="high" id="customRadioc2"
                                                                name="priority" class="form-check-input">
                                                            <label class="form-check-label"
                                                                for="customRadioc2">High</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="form-check">
                                                            <input type="radio" value="medium" id="customRadioc3"
                                                                name="priority" class="form-check-input">
                                                            <label class="form-check-label"
                                                                for="customRadioc3">Medium</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="form-check">
                                                            <input type="radio" value="low" id="customRadioc4"
                                                                name="priority" class="form-check-input">
                                                            <label class="form-check-label"
                                                                for="customRadioc4">Low</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </form>
                            </div>
                            <div class="modal-footer align-items-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                                <button id="update_event" type="button" class="btn btn-primary fc-addEventButton-button"
                                    data-bs-dismiss="modal">Update</button>
                                <button id="delete_event" type="button" class="btn btn-danger fc-addEventButton-button"
                                    data-bs-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Edit Event -->
            </div>
        </div>
        <!-- /Page Body -->
        <!-- /Main Content -->
    </div>
@endsection


@section('js')
    {{-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script> --}}
    <!-- jQuery -->
    <script src="{{ asset('asset/vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('asset/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- FeatherIcons JS -->
    <script src="{{ asset('asset/dist/js/feather.min.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('asset/dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('asset/vendors/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Bootstrap Colorpicker JS -->
    <script src="{{ asset('asset/vendors/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('asset/dist/js/color-picker-data.js') }}"></script>

    <!-- Fullcalendar JS -->
    <script src="{{ asset('asset/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('asset/vendors/fullcalendar/main.min.js') }}"></script>
    <script src="{{ asset('asset/vendors/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('asset/dist/js/daterangepicker-data.js') }}"></script>
    <script src="{{ asset('asset/vendors/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('asset/dist/js/fullcalendar-init.js') }}"></script>

    <!-- Bootstrap Notify JS -->
    <script src="{{ asset('asset/dist/js/bootstrap-notify.min.js') }}"></script>

    <!-- Init JS -->
    <script src="{{ asset('asset/dist/js/init.js') }}"></script>
    <script>
        $('input[name="calendar"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: false,
            minYear: 1901,
            "cancelClass": "btn-secondary",
            autoApply :true,
            parentEl: "#inline_calendar",
        });
        var curYear = moment().format('YYYY'),
            curMonth = moment().format('MM');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {

            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                initialDate: curYear + '-' + curMonth + '-07',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                },
                themeSystem: 'bootstrap',
                height: 'parent',
                droppable: true,
                editable: true,
                selectable: true,
                selectMirror: true,
                select: function(arg) {
                    // var title = prompt('Event Title:');
                    // if (title) {
                    //     calendar.addEvent({
                    //         title: title,
                    //         start: arg.start,
                    //         end: arg.end,
                    //         allDay: arg.allDay
                    //     })
                    // }
                    // calendar.unselect()
                },
                events: '/tasks',
                eventDrop: function(info) {
                    updateEvent(info.event);
                },
                eventResize: function(info) {
                    updateEvent(info.event);
                },
                eventClick: function(info) {

                    $('#edit_event_modal').modal('show')
                    /*Event Edit*/
                    // Poluplate the fields
                    $.ajax({
                        url: `/tasks/get-details/${info.event.id}`,
                        method: 'GET',
                        data: {
                            taskId: info.event.id
                        },
                        success: function(event) {
                        // Remplir les champs du modal avec les données de l'événement
                        $('.cal-event-named').val(event.title);
                        $('.cal-event-description').val(event.description);
                        $('.cal-event-date-startd').val(event.start_date);
                        $('.time').eq(0).val(event.start_time);
                        $('.cal-event-date-endd').val(event.end_date);
                        $('.time').eq(1).val(event.end_time);
                        $('select[name="location_type"]').val(event.status);
                        $('input[name="public_or_privated"][value="' + event.public_or_private + '"]').prop('checked', true);
                        
                        // Si l'événement est privé, afficher les utilisateurs spécifiques
                        if (event.public_or_private === 'private') {
                            $('#edit-specific_users_fieldd').show();
                            
                            // Vérifiez si specific_users est un tableau et assurez-vous qu'il est non vide
                            $('select[name="specific_usersd[]"]').val(JSON.parse(event.specific_users));
                        } else {
                            $('#edit-specific_users_fieldd').hide();
                        }


                        // Afficher le modal
                        $('#edit_event_modal').modal('show');
                    },
                        error: function(xhr, status, error) {
                            console.error('Error deleting task:', error);
                            // Show error notification
                        }
                    })

                    // Update event
                    $('#update_event').on('click', function() {
                    // Récupérer les valeurs des champs
                    const taskId = $('#edit_event_modal').data('task-id'); // Assurez-vous que cet ID est défini lors de l'ouverture du modal
                    const title = $('.cal-event-named').val();
                    const description = $('.cal-event-description').val();
                    const startDate = $('.cal-event-date-startd').val();
                    const startTime = $('.input-single-timepicker.time[name="input-timepicker"]').val();
                    const endDate = $('.cal-event-date-endd').val();
                    const endTime = $('.input-single-timepicker.time[name="input-timepicker"]').val();
                    const locationType = $('select[name="location_type"]').val();
                    const publicOrPrivate = $('input[name="public_or_privated"]:checked').val();
                    const specificUsers = $('select[name="specific_usersd[]"]').val();

                    // Vérification des valeurs (facultatif)
                    if (!title || !startDate || !endDate) {
                        alert('Please fill in all required fields.');
                        return;
                    }

                    // Créer l'objet des données à envoyer
                    const data = {
                        taskId: info.event.id, // ID de la tâche à mettre à jour
                        title: title,
                        description: description,
                        start_date: startDate,
                        start_time: startTime,
                        end_date: endDate,
                        end_time: endTime,
                        location_type: locationType,
                        public_or_private: publicOrPrivate,
                        specific_users: specificUsers
                    };

                    // Envoyer les données via AJAX
                    $.ajax({
                        url: '/tasks/update', // URL de votre route de mise à jour
                        type: 'PUT', // Méthode HTTP
                        data: data,
                        success: function(response) {
                            // Gérer la réponse de succès
                            alert('Task updated successfully!');
                            // Optionnel : mettre à jour l'interface utilisateur ou recharger la liste des tâches
                            location.reload(); // Recharge la page ou met à jour la liste
                        },
                        error: function(xhr) {
                            // Gérer les erreurs
                            alert('Error updating task: ' + xhr.responseText);
                        }
                    });
                });
                    // Delete event
                    $('#delete_event').click(function() {
                        Swal.fire({
                            html: '<div class="mb-3"></div><h5 class="text-danger">Delete Task ?</h5><p>Deleting a task will permanently remove from your library.</p>',
                            customClass: {
                                confirmButton: 'btn btn-outline-secondary text-danger',
                                cancelButton: 'btn btn-outline-secondary text-grey',
                                container: 'swal2-has-bg'
                            },
                            showCancelButton: true,
                            buttonsStyling: false,
                            confirmButtonText: 'Yes, Delete Task',
                            cancelButtonText: 'No, Keep Task',
                            reverseButtons: true,
                        }).then((result) => {
                            if (result.value) {
                                $.ajax({
                                    url: `/tasks/remove/${info.event.id}`,
                                    method: 'GET',
                                    data: {
                                        taskId: info.event.id
                                    },
                                    success: function(response) {
                                        calendar.getEventById(info.event.id)
                                            .remove();
                                        // Show success notification
                                        Swal.fire({
                                            html: '<div class="d-flex align-items-center"><h5 class="text-danger mb-0">Task has been deleted!</h5></div>',
                                            timer: 2000,
                                            customClass: {
                                                content: 'p-0 text-left',
                                                actions: 'justify-content-start',
                                            },
                                            showConfirmButton: false,
                                            buttonsStyling: false,
                                        });
                                        location.reload(true);
                                    },
                                    error: function(xhr, status, error) {
                                        console.error(
                                            'Error deleting task:',
                                            error);
                                        // Show error notification
                                    }
                                });
                            }
                        })
                    });
                }
            });
            calendar.render();

            function updateEvent(event) {
                $.ajax({
                    url: `/tasks/update/`,
                    method: 'PUT',
                    data: {
                        // user_id-specific_users-public_or_private
                        taskId: event.id,
                        title: event.title,
                        specific_users: event.specific_users,
                        public_or_private: event.public_or_private,
                        start_date: event.start.toISOString().slice(0, 10), // Start date (YYYY-MM-DD)
                        start_time: event.start.toISOString().slice(11, 19), // Start time (HH:MM:SS)
                        end_date: event.end ? event.end.toISOString().slice(0, 10) :
                        null, // End date (if available)
                        end_time: event.end ? event.end.toISOString().slice(11, 19) :
                            null // End time (if available)
                    },
                    success: function(response) {
                        console.log('Event updated successfully');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating task:', error);
                        calendar.refetchEvents(); // Revert changes on failure
                    }
                });
            }

            // Add new event
            $('#add_event').click(function() {
                var selectedUsers = $('#edit-specific_users').val();
                var newEvent = {
                    // user_id-specific_users-public_or_private
                    title: $('.cal-event-name').val(),
                    description: $('#event_description_val').val(),
                    start_date: $('#start_date').val(),
                    start_time: $('#start_time').val(),
                    end_date: $('#end_date').val(),
                    end_time: $('#end_time').val(),
                    specific_users: selectedUsers,
                    public_or_private: $('input[name="public_or_private"]:checked').val(),
                    color: $('.cal-event-color').val(),
                    priority: $('input[name="priority"]:checked').val(),
                };
                console.log(newEvent);
                

                $.ajax({
                    url: `/tasks/add/`,
                    method: 'POST',
                    data: newEvent,
                    success: function(response) {
                        calendar.addEvent(response);
                        $('#create_new_event').modal('hide');
                        // Show success notification
                        $.notify({
                            icon: 'ri-checkbox-line mr-5',
                            message: `Event ${newEvent.title} has been created`,
                        }, {
                            type: "dismissible alert alert-inv alert-inv-primary",
                            placement: {
                                from: "bottom",
                                align: "center"
                            },
                            animate: {
                                enter: 'animated fadeInUp',
                                exit: 'animated fadeOutUp'
                            },
                            delay: 1000,
                        });
                        location.reload(true);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error adding task:', error);
                        // Show error notification
                    }
                });
            });
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const publicRadio = document.getElementById('edit-public');
        const privateRadio = document.getElementById('edit-private');
        const specificUsersField = document.getElementById('edit-specific_users_field');

        // Fonction pour afficher ou masquer le champ des utilisateurs privés
        function toggleSpecificUsers() {
            if (privateRadio.checked) {
                specificUsersField.style.display = 'block';
            } else {
                specificUsersField.style.display = 'none';
            }
        }

        // Écouter les changements sur les radios
        publicRadio.addEventListener('change', toggleSpecificUsers);
        privateRadio.addEventListener('change', toggleSpecificUsers);

        // Appeler la fonction une fois pour initialiser l'affichage correct
        toggleSpecificUsers();
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const publicRadio = document.getElementById('edit-publicd');
        const privateRadio = document.getElementById('edit-privated');
        const specificUsersField = document.getElementById('edit-specific_users_fieldd');

        // Fonction pour afficher ou masquer le champ des utilisateurs privés
        function toggleSpecificUsers() {
            if (privateRadio.checked) {
                specificUsersField.style.display = 'block';
            } else {
                specificUsersField.style.display = 'none';
            }
        }

        // Écouter les changements sur les radios
        publicRadio.addEventListener('change', toggleSpecificUsers);
        privateRadio.addEventListener('change', toggleSpecificUsers);

        // Appeler la fonction une fois pour initialiser l'affichage correct
        toggleSpecificUsers();
    });
</script>
@endsection

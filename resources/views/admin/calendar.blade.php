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
                                            <textarea id="description" class="form-control" rows="3"></textarea>
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
                                <button id="add_event" type="button" class="btn btn-primary fc-addEventButton-button"
                                    data-bs-dismiss="modal">Add</button>
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
                                            <input id="event_title_val" class="form-control  cal-event-name"
                                                type="text" />
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
                                                <input class="form-control cal-event-date-start" id="event_start_date_val"
                                                    name="single-date-pick" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Start Time</label>
                                                <input class="form-control input-single-timepicker"
                                                    id="event_start_time_val" name="input-timepicker" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">End Date</label>
                                                <input class="form-control cal-event-date-end" id="event_end_date_val"
                                                    name="single-date-pick" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">End Time</label>
                                                <input class="form-control input-single-timepicker"
                                                    id="event_end_time_val" type="text" />
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
                        success: function(response) {
                            console.log(response);
                            var title = response.title
                            var description = response.description
                            var start_date = response.start_date
                            var start_time = response.start_time
                            var end_date = response.end_date
                            var end_time = response.end_time
                            var color = response.color
                            var priority = response.priority

                            $('#event_title_val').val(title)
                            $('#event_description_val').val(description)
                            $('#event_start_date_val').val(start_date)
                            $('#event_start_time_val').val(start_time)
                            $('#event_end_date_val').val(end_date)
                            $('#event_end_time_val').val(end_time)
                            $('#event_color_val').val(color)
                            $('input[name="priority":checked]').val(priority)

                        },
                        error: function(xhr, status, error) {
                            console.error('Error deleting task:', error);
                            // Show error notification
                        }
                    })

                    // Update event
                    $('#update_event').click(function() {
                        console.log('ok');

                        $.ajax({
                            url: `/tasks/update`,
                            method: 'PUT',
                            data: {
                                taskId: info.event.id,
                                title: $('#event_title_val').val(),
                                description: $('#event_description_val').val(),
                                start_date: $('#event_start_date_val').val(),
                                start_time: $('#event_start_time_val').val(),
                                end_date: $('#event_end_date_val').val(),
                                end_time: $('#event_end_time_val').val(),
                                color: $('#event_color_val').val(),
                                priority: $('#event_priority_val').val()
                            },
                            success: function(response) {
                                $.notify({
                                    icon: 'ri-checkbox-line mr-5',
                                    message: `Event has been updated`,
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
                                console.error('Error deleting task:', error);
                                // Show error notification
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
                        taskId: event.id,
                        title: event.title,
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
                var newEvent = {
                    title: $('.cal-event-name').val(),
                    description: $('#event_description').val(),
                    start_date: $('#start_date').val(),
                    start_time: $('#start_time').val(),
                    end_date: $('#end_date').val(),
                    end_time: $('#end_time').val(),
                    color: $('.cal-event-color').val(),
                    priority: $('input[name="priority"]:checked').val(),
                };

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
@endsection

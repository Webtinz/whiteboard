/*Full Calendar Init*/
//Small Calendar
$('input[name="calendar"]').daterangepicker({
	singleDatePicker: true,
	showDropdowns: false,
	minYear: 1901,
	"cancelClass": "btn-secondary",
	autoApply :true,
	parentEl: "#inline_calendar",
});
/* Single Date*/
$('input[name="single-date-pick"]').daterangepicker({
	singleDatePicker: true,
	startDate: moment().startOf('hour'),
	showDropdowns: true,
	minYear: 1901,
	"cancelClass": "btn-secondary",
	locale: {
	  format: 'YYYY-MM-DD'
	}
});
$('input[name="calendar"]').trigger("click");



/*Extra Costomization*/
setTimeout(function(){
	$('.fc-header-toolbar').append('<div class="hk-sidebar-togglable"></div>');
	$('.fc-today-button').removeClass('btn-primary').addClass('btn-outline-light');
	$('.fc-dayGridMonth-button,.fc-timeGridWeek-button,.fc-timeGridDay-button,.fc-listWeek-button').removeClass('btn-primary').addClass('btn-outline-light d-md-inline-block d-none');
	$('.fc-prev-button,.fc-next-button').addClass('btn-icon btn-flush-dark btn-rounded flush-soft-hover').find('.fa').addClass('icon');
	$('.fc-toolbar-chunk:nth-child(3)').append('<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Collapse"><span class="icon"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></span><span class="feather-icon d-none"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></span></a>');
	$('.fc-prev-button,.fc-next-button').addClass('btn-icon btn-flush-dark btn-rounded flush-soft-hover').find('.fa').addClass('icon');
},100);
	



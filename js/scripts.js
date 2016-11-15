$(function() {
    $('#inputData').datepicker({
		autoclose: true,
		startDate: "01-01-1900",
		endDate: "31-12-2016",
	    todayBtn: "linked",
	    language: "pt-BR",
	    todayHighlight: true
	});

	$('[data-toggle="tooltip"]').tooltip(); 
});
$(function() {
    $(".datepicker").datepicker({
        dateFormat: 'dd-mm-yy'
    });

    $('.selectpicker').selectpicker();

    $('.steps_update .md-check').click(function () {
        $(this).parents('.panel').find('.form-control').attr('disabled','true');
    });

    $('.dataTable').DataTable();
});


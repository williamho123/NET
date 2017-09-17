$(document).ready(function() {

    $('#registration_open_date').pickadate({
        selectMonths: true,
        selectYears: 5,
        closeOnSelect: true,
        format: 'yyyy-mm-dd'
    });

    $('#update-closed-registration-form :radio').change(function() {
        var picker = $('#registration_open_date_div');
        if ($('#reg_not_open').is(':checked')) {
            picker.show(700);
        } else {
            picker.hide(700);
        }
    });

    $('#update-closed-registration-form').on('submit', function(e){
        e.preventDefault();
        var regEnded = $('#reg_ended').is(':checked');
        var openDate = $('#registration_open_date').val();

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: {'reg_ended' : regEnded, 'open_date' : openDate},
            success: function (data) {
                Materialize.toast(data + '<a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
            },
            error: function(data) {
                Materialize.toast(data.responseText + '<a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
            }
        });
    });
});

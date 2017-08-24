$(document).ready(function() {

    $('select').material_select();

    $('#team_captain_number').formatter({
        'pattern': '({{999}}) {{999}}-{{9999}}'
    });

    $('#advisor_number').formatter({
        'pattern': '({{999}}) {{999}}-{{9999}}'
    });

    $('#econ_back').change(function() {
        var object = $('#econ_exp_div');
        if ($('#econ_back').prop('checked')) {
            object.show(700);
        } else {
            object.hide(700);
        }
    });

    $('#register-form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/registration',
            data: new FormData($(this)[0]),
            processData: false,
            contentType: false,
            success: function (data) {

            },
            error: function (data) {
                if (data.status === 500) {
                    $('#500message').text(data.responseJSON['message']);
                    $('#500modal').modal('open');
                } else {
                    var list = errorsJSONToList(data);
                    $('#alerts').show().html(list);
                    $('#alertmodal').modal('open');
                }
            }
        });
    });
});
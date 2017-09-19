$(() => {

    $('select').material_select();

    $('#team_captain_number').formatter({
        'pattern': '({{999}}) {{999}}-{{9999}}'
    });

    $('#advisor_number').formatter({
        'pattern': '({{999}}) {{999}}-{{9999}}'
    });

    $('#econ_back').change(() => {
        let object = $('#econ_exp_div');
        if ($('#econ_back').prop('checked')) {
            object.show(700);
        } else {
            object.hide(700);
        }
    });

    let registerForm = $('#register-form');

    registerForm.submit((e) => {
        e.preventDefault();
        $.ajax({
            type: registerForm.attr('method'),
            url: registerForm.attr('action'),
            data: registerForm.serializeArray(),
            success: (data) => {

            },
            error: (data) => {
               handleErrors(data);
            }
        });
    });
});
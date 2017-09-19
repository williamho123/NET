$(() => {

    $('#registration_open_date').pickadate({
        selectMonths: true,
        selectYears: 5,
        closeOnSelect: true,
        format: 'yyyy-mm-dd'
    });

    $('#update-closed-registration-form :radio').change(() => {
        let picker = $('#registration_open_date_div');
        if ($('#reg_not_open').is(':checked')) {
            picker.show(700);
        } else {
            picker.hide(700);
        }
    });

    let updateClosedRegForm = $('#update-closed-registration-form');

    updateClosedRegForm.submit((e) => {
        e.preventDefault();
        let regEnded = $('#reg_ended').is(':checked');
        let openDate = $('#registration_open_date').val();

        $.ajax({
            type: updateClosedRegForm.attr('method'),
            url: updateClosedRegForm.attr('action'),
            data: {'reg_ended' : regEnded, 'open_date' : openDate},
            success: (data) => {
                Materialize.toast(data + '<a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
            },
            error: (data) => {
                Materialize.toast(data.responseText + '<a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
            }
        });
    });
});

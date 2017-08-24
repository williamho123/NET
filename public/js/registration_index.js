$(document).ready(function() {

    $('#email-update-form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/registration/update',
            data: new FormData($(this)[0]),
            processData: false,
            contentType: false,
            success: function () {
                Materialize.toast('Email successfully added! <a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
                $('#email-update-form')[0].reset();
                Materialize.updateTextFields();
            },
            error: function(data) {
                if (data.status === 500) {
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
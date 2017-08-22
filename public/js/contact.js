jQuery(document).ready(function () {
    $('#contactform').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/contact',
            data: new FormData($(this)[0]),
            processData: false,
            contentType: false,
            success: function (data) {
                Materialize.toast('Form successfully submitted! <a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
                $('#contactform')[0].reset();
                Materialize.updateTextFields();
            },
            error: function (data) {
                if (data.status === 500) {
                    $('#500modal').modal('open');
                } else {
                    var list = errorsJSONToList(data);
                    $('#alerts').show().html(list);
                    $('#alertmodal').modal('open');
                }
            }
        });
    })
});
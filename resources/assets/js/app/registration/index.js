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
                swal({
                    title: "Success!",
                    text: "Your email has been added.",
                    type: "success",
                    confirmButtonColor: "#4db6ac"
                });
                $('#email-update-form')[0].reset();
                Materialize.updateTextFields();
            },
            error: function(data) {
               handleErrors(data);
            }
        });
    });
});
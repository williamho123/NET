jQuery(document).ready(function () {
    $('#contact-form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/contact',
            data: new FormData($(this)[0]),
            processData: false,
            contentType: false,
            success: function () {
                swal({
                    title: "Success!",
                    text: "Your message has been submitted.",
                    type: "success",
                    confirmButtonColor: "#4db6ac",
                });
                $('#contact-form')[0].reset();
                Materialize.updateTextFields();
            },
            error: function (data) {
                handleErrors(data);
            }
        });
    })
});
$(() => {

    let emailUpdateForm = $('#email-update-form');

    emailUpdateForm.submit((e) => {
        e.preventDefault();
        $.ajax({
            type: emailUpdateForm.attr('method'),
            url: emailUpdateForm.attr('action'),
            data: emailUpdateForm.serializeArray(),
            success: () => {
                swal({
                    title: "Success!",
                    text: "Your email has been added.",
                    type: "success",
                    confirmButtonColor: "#4db6ac"
                });
                emailUpdateForm[0].reset();
                Materialize.updateTextFields();
            },
            error: (data) => {
               handleErrors(data);
            }
        });
    });
});
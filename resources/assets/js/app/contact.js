$(() => {
    let contactForm = $('#contact-form');

    contactForm.submit((e) => {
        e.preventDefault();
        $.ajax({
            type: contactForm.attr('method'),
            url: contactForm.attr('action'),
            data: contactForm.serializeArray(),
            success: () => {
                swal({
                    title: "Success!",
                    text: "Your message has been submitted.",
                    type: "success",
                    confirmButtonColor: "#4db6ac"
                });
                contactForm[0].reset();
                Materialize.updateTextFields();
            },
            error: (data) => {
                handleErrors(data);
            }
        });
    })
});
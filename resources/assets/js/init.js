/**
 * This file contains helper functions and initializations that should be made global to all modules.
 */

// Initialize MaterializeCSS UI elements.
$(() => {
    $('.button-collapse').sideNav();
    $('.scrollspy').scrollSpy();
    $('.parallax').parallax();
});

// Set pushpin element delay
setTimeout(() => {
    let nav = $('nav');
    if (nav.length) {
        $('.toc-wrapper').pushpin({
            top: nav.height()
        });
    }
}, 100);

window.closeToast = () => {
    $(document).on('click', '#toast-container .toast', function() {
        $(this).fadeOut(function(){
            $(this).remove();
        });
    });
};

window.handleErrors = (data) => {
    if (data.status === 500) {
        swal({
            title: "Internal Server Error",
            text: "Please try again later. If problem persists, please send an email to " + $('meta[name="admin-email"]').attr('content'),
            type: "error",
            confirmButtonColor: "#4db6ac"
        });
    } else {
        swal({
            title: "Submission Error",
            text: 'Please correct before proceeding. <br><br>' + errorsJSONToHTML(data),
            type: "error",
            html: true,
            confirmButtonColor: "#4db6ac"
        });
    }
};

window.errorsJSONToHTML = (data) => {

    let htmlString = '';
    for (error in data.responseJSON) {
        htmlString += '<div class="sa-error-container show"> <div class="icon">!</div> <p>' + data.responseJSON[error] + '</p></div>';
    }

    return htmlString;
};
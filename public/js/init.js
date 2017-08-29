(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.scrollspy').scrollSpy();
    $('.parallax').parallax();

    // Sets up Laravel CSRF Token to work with all AJAX requests
    jQuery.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

  }); // end of document ready
})(jQuery); // end of jQuery name space

setTimeout(function() {
    if ($('nav').length) {
        $('.toc-wrapper').pushpin({
            top: $('nav').height()
        });
    }
}, 100);

function closeToast() {
    $(document).on('click', '#toast-container .toast', function() {
        $(this).fadeOut(function(){
            $(this).remove();
        });
    });
}

function handleErrors(data) {
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
}

function errorsJSONToHTML(data) {

    var htmlString = '';
    for (error in data.responseJSON) {
        htmlString += '<div class="sa-error-container show"> <div class="icon">!</div> <p>' + data.responseJSON[error] + '</p></div>';
    }

    return htmlString;
}
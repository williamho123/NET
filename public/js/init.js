(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

    // Sets up Laravel CSRF Token to work with all AJAX requests
    jQuery.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

  }); // end of document ready
})(jQuery); // end of jQuery name space

function closeToast() {
    $(document).on('click', '#toast-container .toast', function() {
        $(this).fadeOut(function(){
            $(this).remove();
        });
    });
}
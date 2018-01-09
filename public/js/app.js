webpackJsonp([2],{

/***/ 13:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(14);


/***/ }),

/***/ 14:
/***/ (function(module, exports, __webpack_require__) {

/*
 * Bootstrap all of the application's JavaScript dependencies.
 */

__webpack_require__(15);

/*---------------------------------------------------------------------------------------*/

/**
 * Load all global helper functions that should be accessible from every module.
 */

__webpack_require__(25);

/***/ }),

/***/ 15:
/***/ (function(module, exports, __webpack_require__) {

/**
 * Require the jQuery and Vue libraries and set global indicators.
 */

window.$ = window.jQuery = __webpack_require__(1);
window.Vue = __webpack_require__(7);

/*---------------------------------------------------------------------------------------*/

/*
 * Set up Laravel CSRF Token to work with all AJAX requests.
 */

var token = $('meta[name="csrf-token"]');

if (token) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token.attr('content')
        }
    });
} else {
    console.error('CSRF token not found in meta tag. AJAX requests may not function properly.');
}

/*---------------------------------------------------------------------------------------*/

/**
 * Require all other third-party Javascript dependencies.
 * - MaterializeCSS JS
 * - SweetAlert JS
 */

__webpack_require__(8);
__webpack_require__(10);

/***/ }),

/***/ 25:
/***/ (function(module, exports) {

/**
 * This file contains helper functions and initializations that should be made global to all modules.
 */

// Initialize MaterializeCSS UI elements.
$(function () {
    $('.button-collapse').sideNav();
    $('.scrollspy').scrollSpy();
    $('.parallax').parallax();
});

// Set pushpin element delay
setTimeout(function () {
    var nav = $('nav');
    if (nav.length) {
        $('.toc-wrapper').pushpin({
            top: nav.height()
        });
    }
}, 100);

window.closeToast = function () {
    $(document).on('click', '#toast-container .toast', function () {
        $(this).fadeOut(function () {
            $(this).remove();
        });
    });
};

window.handleErrors = function (data) {
    if (data.status === 500) {
        swal({
            title: "Internal Server Error",
            text: "Please try again later. If problem persists, please send an email to " + $('meta[name="admin-email"]').attr('content'),
            type: "error",
            confirmButtonColor: "#4db6ac"
        });
    } else if (data.status === 422) {
        swal({
            title: "Submission Error",
            text: 'Please correct before trying again. <br><br>' + errorsJSONToHTML(data),
            type: "error",
            html: true,
            confirmButtonColor: "#4db6ac"
        });
    } else {
        swal({
            title: "Oops!",
            text: "Something went wrong. If problem persists, please send an email to " + $('meta[name="admin-email"]').attr('content'),
            type: "error",
            confirmButtonColor: "#4db6ac"
        });
    }
};

window.errorsJSONToHTML = function (data) {

    var htmlString = '';
    for (error in data.responseJSON) {
        htmlString += '<div class="sa-error-container show"> <div class="icon">!</div> <p>' + data.responseJSON[error] + '</p></div>';
    }

    return htmlString;
};

/***/ })

},[13]);
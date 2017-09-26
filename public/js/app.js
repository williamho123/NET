webpackJsonp([1],[
/* 0 */,
/* 1 */,
/* 2 */,
/* 3 */,
/* 4 */,
/* 5 */,
/* 6 */,
/* 7 */,
/* 8 */,
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(10);


/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

/*
 * Bootstrap all of the application's JavaScript dependencies.
 */

__webpack_require__(11);

/*---------------------------------------------------------------------------------------*/

/**
 * Load all global helper functions that should be accessible from every module.
 */

__webpack_require__(19);

/*---------------------------------------------------------------------------------------*/

/**
 * Require all application related JavaScript modules within the app folder.
 */

var req = __webpack_require__(20);
req.keys().forEach(function (key) {
  req(key);
});

/***/ }),
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

/**
 * Require the jQuery and Lodash libraries and set global indicators.
 */

window._ = __webpack_require__(4);
window.$ = window.jQuery = __webpack_require__(0);

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

__webpack_require__(6);
__webpack_require__(7);

/***/ }),
/* 12 */,
/* 13 */,
/* 14 */,
/* 15 */,
/* 16 */,
/* 17 */,
/* 18 */,
/* 19 */
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

window.errorsJSONToHTML = function (data) {

    var htmlString = '';
    for (error in data.responseJSON) {
        htmlString += '<div class="sa-error-container show"> <div class="icon">!</div> <p>' + data.responseJSON[error] + '</p></div>';
    }

    return htmlString;
};

/***/ }),
/* 20 */
/***/ (function(module, exports, __webpack_require__) {

var map = {
	"./admin/dashboard.js": 21,
	"./admin/settings.js": 22,
	"./contact.js": 23,
	"./registration/create.js": 24,
	"./registration/index.js": 25
};
function webpackContext(req) {
	return __webpack_require__(webpackContextResolve(req));
};
function webpackContextResolve(req) {
	var id = map[req];
	if(!(id + 1)) // check for number or string
		throw new Error("Cannot find module '" + req + "'.");
	return id;
};
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = 20;

/***/ }),
/* 21 */
/***/ (function(module, exports) {

$(function () {

    $('#registration_toggle').change(function () {
        sendToggleAJAXRequest('/admin/registration');
    });

    $('#maintenance_toggle').change(function () {
        sendToggleAJAXRequest('/admin/maintenance');
    });
});

function sendToggleAJAXRequest(url) {
    $.ajax({
        type: 'POST',
        url: url,
        success: function success(data) {
            Materialize.toast(data + '<a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
        },
        error: function error() {
            Materialize.toast('Something went wrong. Please reload and try again. <a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
        }
    });
}

/***/ }),
/* 22 */
/***/ (function(module, exports) {

$(function () {

    $('#registration_open_date').pickadate({
        selectMonths: true,
        selectYears: 5,
        closeOnSelect: true,
        format: 'yyyy-mm-dd'
    });

    $('#update-closed-registration-form :radio').change(function () {
        var picker = $('#registration_open_date_div');
        if ($('#reg_not_open').is(':checked')) {
            picker.show(700);
        } else {
            picker.hide(700);
        }
    });

    var updateClosedRegForm = $('#update-closed-registration-form');

    updateClosedRegForm.submit(function (e) {
        e.preventDefault();
        var regEnded = $('#reg_ended').is(':checked');
        var openDate = $('#registration_open_date').val();

        $.ajax({
            type: updateClosedRegForm.attr('method'),
            url: updateClosedRegForm.attr('action'),
            data: { 'reg_ended': regEnded, 'open_date': openDate },
            success: function success(data) {
                Materialize.toast(data + '<a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
            },
            error: function error(data) {
                Materialize.toast(data.responseText + '<a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
            }
        });
    });
});

/***/ }),
/* 23 */
/***/ (function(module, exports) {

$(function () {
    var contactForm = $('#contact-form');

    contactForm.submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: contactForm.attr('method'),
            url: contactForm.attr('action'),
            data: contactForm.serializeArray(),
            success: function success() {
                swal({
                    title: "Success!",
                    text: "Your message has been submitted.",
                    type: "success",
                    confirmButtonColor: "#4db6ac"
                });
                contactForm[0].reset();
                Materialize.updateTextFields();
            },
            error: function error(data) {
                handleErrors(data);
            }
        });
    });
});

/***/ }),
/* 24 */
/***/ (function(module, exports) {

$(function () {

    $('select').material_select();

    $('#team_captain_number').formatter({
        'pattern': '({{999}}) {{999}}-{{9999}}'
    });

    $('#advisor_number').formatter({
        'pattern': '({{999}}) {{999}}-{{9999}}'
    });

    $('#econ_back').change(function () {
        var object = $('#econ_exp_div');
        if ($('#econ_back').prop('checked')) {
            object.show(700);
        } else {
            object.hide(700);
        }
    });

    var registerForm = $('#register-form');

    registerForm.submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: registerForm.attr('method'),
            url: registerForm.attr('action'),
            data: registerForm.serializeArray(),
            success: function success(data) {},
            error: function error(data) {
                handleErrors(data);
            }
        });
    });
});

/***/ }),
/* 25 */
/***/ (function(module, exports) {

$(function () {

    var emailUpdateForm = $('#email-update-form');

    emailUpdateForm.submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: emailUpdateForm.attr('method'),
            url: emailUpdateForm.attr('action'),
            data: emailUpdateForm.serializeArray(),
            success: function success() {
                swal({
                    title: "Success!",
                    text: "Your email has been added.",
                    type: "success",
                    confirmButtonColor: "#4db6ac"
                });
                emailUpdateForm[0].reset();
                Materialize.updateTextFields();
            },
            error: function error(data) {
                handleErrors(data);
            }
        });
    });
});

/***/ })
],[9]);
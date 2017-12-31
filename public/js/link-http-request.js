/*
 * Script taken from https://gist.github.com/soufianeEL/3f8483f0f3dc9e3ec5d9
 *
 * Can be used for DELETE or PUT requests.
 *
 * Modified to allow for:
 *  - Sweet Alerts
 *  - AJAX submission of request (with Laravel's form-method spoofing)
 *  - Custom page redirect after request
 *  - Automatically grabbing CSRF token from AJAX setup
 */

/*
 Examples:

 Simple usage of sending a DELETE request to URI in the href:
 <a href="posts/2" data-method="DELETE">

 Or, get confirmation in the process:
 <a href="posts/2" data-method="DELETE" data-confirm="Are you sure?">

 Optionally, provide a custom redirect URI after the AJAX request is complete:
 <a href="posts/2" data-method="DELETE" data-confirm="Are you sure?" data-redirect="/posts">
 */

$(function() {

    let laravel = {
        initialize() {
            this.methodLinks = $('a[data-method]');
            this.registerEvents();
        },

        registerEvents() {
            this.methodLinks.click(this.handleRequest);
        },

        handleRequest(e) {
            e.preventDefault();

            let link = $(this);
            let httpMethod = link.data('method').toUpperCase();

            if ($.inArray(httpMethod, ['PUT', 'DELETE']) === -1) {
                return;
            }

            if (link.data('confirm')) {
                swal({
                    title: "Confirm action ",
                    text: link.data('confirm'),
                    type: "warning",
                    showCancelButton: true,
                    closeOnConfirm: true,
                    cancelButtonText: "No",
                    confirmButtonText: "Yes",
                    confirmButtonColor: "#ec6c62"
                }, () => {
                    laravel.sendAJAX(link);
                });
            } else {
                laravel.sendAJAX(link);
            }
        },

        sendAJAX(link) {
            $.ajax({
                type: 'POST',
                url: link.attr('href'),
                data: {'_method' : link.data('method')},
                success: () => {
                    swal({
                        title: "Success!",
                        text: "The requested action has been successfully completed.",
                        type: "success",
                        confirmButtonColor: "#4db6ac"
                    }, () => {
                        if (link.data('redirect')) {
                            window.location.replace(link.data('redirect'));
                        } else {
                            window.location.replace(window.location.href);
                        }
                    });
                },
                error: (data) => {
                    handleErrors(data);
                }
            });
        }
    };

    laravel.initialize();
});
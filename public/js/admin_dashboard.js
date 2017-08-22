$(document).ready(function() {

    $('#maintenance_toggle').change(function() {
        sendToggleAJAXRequest('/admin/maintenance')
    })

});

function sendToggleAJAXRequest(url) {
    $.ajax({
        type: 'POST',
        url: url,
        success: function(data) {
            Materialize.toast(data + '<a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
        },
        error: function(data) {
            Materialize.toast('Something went wrong. Please reload and try again. <a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
        }
    });
}
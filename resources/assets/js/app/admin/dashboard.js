$(() => {

    $('#registration_toggle').change(() => {
        sendToggleAJAXRequest('/admin/registration');
    });

    $('#maintenance_toggle').change(() => {
        sendToggleAJAXRequest('/admin/maintenance');
    })

});

function sendToggleAJAXRequest(url) {
    $.ajax({
        type: 'POST',
        url: url,
        success: (data) => {
            Materialize.toast(data + '<a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
        },
        error: () => {
            Materialize.toast('Something went wrong. Please reload and try again. <a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
        }
    });
}
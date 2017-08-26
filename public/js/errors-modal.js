function handleErrors(data) {
    if (data.status === 500) {
        $('#500_modal').modal('open');
    } else {
        var list = errorsJSONToList(data);
        $('#alerts').show().html(list);
        $('#alert_modal').modal('open');
    }
}

function errorsJSONToList(data) {

    var allErrors = '';
    for (error in data.responseJSON) {
        allErrors += '<li class="collection-item red lighten-2">' + data.responseJSON[error] + '</li>';
    }

    return allErrors;
}

function cleanUpErrors() {
    $('#alerts').empty();
}
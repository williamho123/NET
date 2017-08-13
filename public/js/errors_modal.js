function errorsJSONToList(data) {

    var allErrors = '';
    for (error in data.responseJSON) {
        allErrors += '<li class="collection-item red lighten-3">' + data.responseJSON[error] + '</li>';
    }

    return allErrors;
}

function cleanUpErrors() {
    $('#alerts').empty();
}
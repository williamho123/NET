<div id="alertmodal" class="modal">
    <div class="modal-content">
        <h4><i class="small material-icons">error_outline</i> Submission Error</h4>
        <p class="information-text">Please correct before proceeding.</p>
        <ul id="alerts" class="collection"></ul>
    </div>
    <div class="modal-footer">
        <a class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>

<div id="500modal" class="modal">
<div class="modal-content">
    <h4><i class="small material-icons">error_outline</i> Internal Server Error</h4>
    <p id="500message" class="information-text"></p>
</div>
<div class="modal-footer">
    <a class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
</div>
</div>

<script type="text/javascript">
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
</script>
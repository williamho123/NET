<div id="alert_modal" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4><i class="small material-icons">error_outline</i> Submission Error</h4>
        <p class="information-text">Please correct before proceeding.</p>
        <ul id="alerts" class="collection"></ul>
    </div>
    <div class="modal-footer blue-grey lighten-4">
        <a class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>

<div id="500_modal" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4><i class="small material-icons">error_outline</i> Internal Server Error</h4>
        <p id="500message" class="information-text">
            Please try again later. If problem persists, please send an email to {{ env('ADMIN_EMAIL') }}
        </p>
    </div>
    <div class="modal-footer blue-grey lighten-4">
        <a class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>
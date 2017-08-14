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

<script src="{{ asset('js/errors_modal.js') }}"></script>
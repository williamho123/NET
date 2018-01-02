@section('scripts')
    <script src="{{ asset(mix('js/component.js')) }}" type="text/javascript"></script>
@endsection

<div class="card z-depth-5">
    <div class="card-content">
        <span class="card-title teal-text lighten-2">Waiver Uploads</span>
        <div class="information-text">
            Please sign and upload the waivers you received in your email.
        </div>
        <div style="font-style: italic; padding-top: 0.5rem">
            Waivers may be hand-signed and scanned as a PDF document or electronically signed (e-sign).
            <span style="color: red;"> If e-signed, you MAY NOT just type your name - it must be a signature. </span>
        </div>

        <br>

        <div class="information-text" >
            <b>Deadline: </b> {{ \Carbon\Carbon::createFromFormat('Y-m-d', $team->forms_deadline)->format('F jS, Y') }}
        </div>

        <br>
        <div class="divider"></div>
        <br>

        @if($team->forms)
            <div class="information-text center-align green-text lighten-2">
                We've received your waivers.
            </div>
        @else
            <div id="vue-gov">
                <waiver-upload-form></waiver-upload-form>
            </div>
        @endif

    </div>
</div>

<script type="text/javascript">
    new Vue({
        el: "#vue-gov"
    });
</script>
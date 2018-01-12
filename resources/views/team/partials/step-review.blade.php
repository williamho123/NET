<div class="card z-depth-5">
    <div class="card-content">
        <span class="card-title teal-text lighten-2">Waiver Review</span>
        <br>
        <div class="center-align">
            <img src="{{ url('/resources/pics/timer.svg') }}" width="75" height="75">
        </div>
        <br>
        <div class="center-align information-text">
            @if ($team->forms_reviewed)
                <b>Approved</b>
            @else
                <b>Please wait</b>
            @endif

        </div>
        <br>
        <div class="center-align information-text">
            @if($team->forms_reviewed)
                <span class="green-text lighten-2">Your waivers have been approved.</span>
            @else
                We are currently reviewing the waivers you have uploaded. Once approved, your registration will be complete!
            @endif
        </div>
    </div>
</div>
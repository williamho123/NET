@extends('layouts.admin')

@section('title', 'View Waivers')

@section('scripts')
    <script src="{{ asset('js/link-http-request.js') }}"></script>
@endsection

@section('content')

    @php($registration = json_decode($team->registration->data))

    <div class="container">
        <br>

        <h4>Team {{ $team->team_id_code }}</h4>
        <div class="divider"></div>
        <br>
        <div class="collection">
            <a href="{{ action('AdminController@viewSpecificWaiver', [$team->id, 'advisor']) }}" target="_blank" class="collection-item black-text">Advisor Waiver ({{ $registration->advisor->name }})</a>
            <a href="{{ action('AdminController@viewSpecificWaiver', [$team->id, 'team_captain']) }}" target="_blank" class="collection-item black-text">Team Captain Waiver ({{ $registration->team_captain->name }})</a>
            <a href="{{ action('AdminController@viewSpecificWaiver', [$team->id, 'team_member_1']) }}" target="_blank" class="collection-item black-text">Team Member 1 Waiver ({{ $registration->team_member_1->name }})</a>
            <a href="{{ action('AdminController@viewSpecificWaiver', [$team->id, 'team_member_2']) }}" target="_blank" class="collection-item black-text">Team Member 2 Waiver ({{ $registration->team_member_2->name }})</a>
            <a href="{{ action('AdminController@viewSpecificWaiver', [$team->id, 'team_member_3']) }}" target="_blank" class="collection-item black-text">Team Member 3 Waiver ({{ $registration->team_member_3->name }})</a>
        </div>
        <div class="row">
            <div class="input-field col">
                <a class='dropdown-button btn waves-effect waves-light amber darken-3' data-activates='dropdown1' {{ $team->forms_reviewed || !$team->accepted ? 'disabled' : '' }}>
                    Replace <i class="material-icons right">find_replace</i>
                </a>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a id="advisor">Advisor</a></li>
                    <li><a id="tc">Team Captain</a></li>
                    <li><a id="t1">Team Member 1</a></li>
                    <li><a id="t2">Team Member 2</a></li>
                    <li><a id="t3">Team Member 3</a></li>
                </ul>
            </div>
            <div class="input-field col">
                <a href="{{ action('AdminController@approveWaivers', [$team->id]) }}" class="btn waves-effect waves-light" data-method="PUT" {{ $team->forms_reviewed || !$team->accepted ? 'disabled' : '' }}>Approve
                    <i class="material-icons right">check_circle</i>
                </a>
            </div>
        </div>
    </div>

    <input type="file" id="file_upload" accept="application/pdf" style="display: none;"/>

    <script type="text/javascript">
        function handleUpload(id) {
            let data = new FormData();
            data.append('id', id);
            data.append('waiver', $('#file_upload').prop('files')[0]);

            $.ajax({
                url: '/admin/registrations/' + {{ $team->id }} + '/waivers/replace',
                type: 'POST',
                data: data,
                processData: false,
                contentType: false,
            }).fail((data) => {
                handleErrors(data)
            }).done(() => {
                swal({
                    title: "Success!",
                    text: "The waiver has been successfully replaced.",
                    type: "success",
                    confirmButtonColor: "#4db6ac"
                }, () => {
                    location.reload();
                });
            });
        }

        $('#advisor').click(function() {
            let upload = $('#file_upload');
            upload.click();
            upload.change(function(){
                handleUpload('advisor')
            });
        });
        $('#tc').click(function() {
            let upload = $('#file_upload');
            upload.click();
            upload.change(function(){
                handleUpload('tc')
            });
        });
        $('#t1').click(function() {
            let upload = $('#file_upload');
            upload.click();
            upload.change(function(){
                handleUpload('t1')
            });
        });
        $('#t2').click(function() {
            let upload = $('#file_upload');
            upload.click();
            upload.change(function(){
                handleUpload('t2')
            });
        });
        $('#t3').click(function() {
            let upload = $('#file_upload');
            upload.click();
            upload.change(function(){
                handleUpload('t3')
            });
        });
    </script>
@endsection
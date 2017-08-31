@extends('layouts.admin')

@section('title', 'Settings')

@section('scripts')
    <script src="{{ asset('js/admin-settings.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12">
                    <div class="card indigo darken-2 z-depth-5">
                        <div class="card-content">
                            <span class="card-title white-text">
                                Closed Registration Settings
                            </span>

                            <br>

                            <p class="information-text white-text">
                                Registration is closed because :
                            </p>

                            <br>

                            <form id="update-closed-registration-form" method="POST" action="{{ url('/admin/settings/closedRegistration') }}">
                                @if($registrationEnded)
                                    <p>
                                        <input class="with-gap" name="reg_closed_why" type="radio" id="reg_ended" checked/>
                                        <label for="reg_ended" class="white-text">It has ended for the current year.</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="reg_closed_why" type="radio" id="reg_not_open" />
                                        <label for="reg_not_open" class="white-text">It has not yet opened for the current year.</label>
                                    </p>

                                    <br>

                                    <div id="registration_open_date_div" hidden>
                                        <p class="information-text white-text">
                                            Select registration open date :
                                        </p>

                                        <input type="text" class="datepicker white-text" id="registration_open_date" data-value="{{ $openDate }}">
                                    </div>
                                @else
                                    <p>
                                        <input class="with-gap" name="reg_closed_why" type="radio" id="reg_ended"/>
                                        <label for="reg_ended" class="white-text">It has ended for the current year.</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="reg_closed_why" type="radio" id="reg_not_open" checked/>
                                        <label for="reg_not_open" class="white-text">It has not yet opened for the current year.</label>
                                    </p>

                                    <br>

                                    <div id="registration_open_date_div">
                                        <p class="information-text white-text">
                                            Select registration open date :
                                        </p>

                                        <input type="text" class="datepicker white-text" id="registration_open_date" data-value="{{ $openDate }}">
                                    </div>
                                @endif

                                <button class="btn waves-effect waves-light" type="submit" name="update">Update
                                    <i class="material-icons right">update</i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
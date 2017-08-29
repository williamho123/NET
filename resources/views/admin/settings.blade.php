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

                            <form action="#">
                                <p>
                                    <input class="with-gap" name="reg_closed_why" type="radio" id="input1" />
                                    <label for="input1" class="white-text">It has ended for the current year.</label>
                                </p>
                                <p>
                                    <input class="with-gap" name="reg_closed_why" type="radio" id="input2" />
                                    <label for="input2" class="white-text">It has not yet opened for the current year.</label>
                                </p>

                                <br>

                                <p class="information-text white-text">
                                    Select registration open date :
                                </p>
                                <input type="text" class="datepicker white-text" id="date" value="">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
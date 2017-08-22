@extends('layouts.admin')

@section('title', 'Dashboard')

@section('scripts')
    <script src="{{ asset('js/admin_dashboard.js') }}"></script>
@endsection

@section('content')

    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card yellow darken-4 z-depth-5">
                        <div class="card-content white-text">
                            <span class="card-title">Registration Status</span>
                            <p>
                                Team registrations are currently
                            </p>
                            <br>
                            <div class="row center-align">
                                <div class="switch">
                                    <label class="white-text information-text">
                                        Off
                                        <input id="registration_toggle" name="registration_toggle" type="checkbox">
                                        <span class="lever"></span>
                                        On
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6">
                    <div class="card green accent-4 z-depth-5">
                        <div class="card-content white-text">
                            <span class="card-title">Maintenance Mode</span>
                            <p>
                                Application maintenance mode is currently
                            </p>
                            <br>
                            <div class="row center-align">
                                <div class="switch">
                                    <label class="white-text information-text">
                                        Off
                                        @if(App::isDownForMaintenance())
                                            <input id="maintenance_toggle" name="maintenance_toggle" type="checkbox" checked>
                                        @else
                                            <input id="maintenance_toggle" name="maintenance_toggle" type="checkbox">
                                        @endif
                                        <span class="lever"></span>
                                        On
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.admin')

@section('title', 'Dashboard')

@section('scripts')
    <script src="{{ asset(mix('js/component.js')) }}" type="text/javascript"></script>
@endsection

@section('content')
    <div class="container">
        <div id="vue-gov">
            <div class="section">
                <div class="row">
                    <div class="col s12 m6">
                        <toggle-card class="blue darken-2 z-depth-5"
                                     on-text="Open" off-text="Closed"
                                     post-to="/admin/registration"
                                     checked="{{ registrationIsOpen() }}">
                            <span slot="title">Registration Status</span>
                            Team registrations are currently
                        </toggle-card>
                    </div>
                    <div class="col s12 m6">
                        <toggle-card class="green lighten-2 z-depth-5"
                                     on-text="On" off-text="Off"
                                     post-to="/admin/maintenance"
                                     checked="{{ App::isDownForMaintenance() }}">
                            <span slot="title">Registration Status</span>
                            Application maintenance mode is currently
                        </toggle-card>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        new Vue({
           el: '#vue-gov'
        });
    </script>
@endsection
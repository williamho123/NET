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
                    <div class="col s12">
                        <div class="card purple darken-1 z-depth-5">
                            <div class="card-content white-text">
                                <span class="card-title">Registration Summary Statistics</span>
                                <br>
                                <div class="row">
                                    <div class="col s12 m3">
                                        <div class="center-align">
                                            <div style="font-size: 4rem">{{ $stats['complete'] }}</div>
                                            <div class="information-text">Complete</div>
                                        </div>
                                    </div>
                                    <div class="col s12 m3">
                                        <div class="center-align">
                                            <div style="font-size: 4rem">{{ $stats['active'] }}</div>
                                            <div class="information-text">Active</div>
                                        </div>
                                    </div>
                                    <div class="col s12 m3">
                                        <div class="center-align">
                                            <div style="font-size: 4rem">{{ $stats['attention'] }}</div>
                                            <div class="information-text">Need Attention</div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col s12 m3">
                                        <div class="row">
                                            <div class="col s1">{{ $stats['decisions'] }}</div>
                                            <div class="col s10">Decisions</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s1">{{ $stats['waiver'] }}</div>
                                            <div class="col s10">Waiver Reviews</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s1">{{ $stats['pending'] }}</div>
                                            <div class="col s10">Pending Jobs</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s1">{{ $stats['failed'] }}</div>
                                            <div class="col s10">Failed Jobs</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6">
                        <toggle-card class="blue darken-2 z-depth-5"
                                     on-text="Open" off-text="Closed"
                                     post-to="/admin/registration"
                                     :checked="{{ registrationIsOpen() }}">
                            <span slot="title">Registration Status</span>
                            Team registrations are currently
                        </toggle-card>
                    </div>
                    <div class="col s12 m6">
                        <toggle-card class="green lighten-2 z-depth-5"
                                     on-text="On" off-text="Off"
                                     post-to="/admin/maintenance"
                                     checked="{{ App::isDownForMaintenance() }}">
                            <span slot="title">App Maintenance</span>
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
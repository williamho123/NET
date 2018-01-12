@extends('layouts.admin')

@section('title', 'Settings')

@section('scripts')
    <script src="{{ asset('js/link-http-request.js') }}"></script>
    <script src="{{ asset(mix('js/component.js')) }}" type="text/javascript"></script>
@endsection

@section('content')
    <div class="container">
        <div id="vue-gov">
            <div class="section">
                <div class="row">
                    <div class="col s12 m6">
                        <date-card class="green lighten-2 z-depth-5"
                                   init-date="{{ $tourDate }}"
                                   post-to="/admin/settings/tournamentDate">
                            <span slot="title">Tournament Date</span>
                        </date-card>
                    </div>
                    <div class="col s12 m6">
                        <date-card class="amber darken-2 z-depth-5"
                                   init-date="{{ $endDate }}"
                                   post-to="/admin/settings/registrationEndDate">
                            <span slot="title">Registration End Date</span>
                        </date-card>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <closed-registration-card class="blue darken-2 z-depth-5"
                                                  :ended="{{ $registrationEnded }}"
                                                  open-date="{{ $openDate }}">
                        </closed-registration-card>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="card z-depth-5 red lighten-1">
                            <div class="card-content white-text">
                                <span class="card-title">Sudo Actions</span>
                                Be careful, these actions cannot be undone!
                                <br><br>
                                <div class="row">
                                    <div class="col s6 m4">
                                        <a href="{{ action('AdminController@archiveTeams') }}" class="btn waves-effect waves-light" data-method="PUT"
                                           data-confirm="Are you sure you want to archive the current teams?">Archive Teams<i class="material-icons right">archive</i>
                                        </a>
                                    </div>
                                    <div class="col s6 m8">
                                        Archive all current teams in registration tab.
                                    </div>
                                </div>
                            </div>
                        </div>
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
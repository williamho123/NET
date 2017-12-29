@extends('layouts.app')

@section('title', 'Registration')

@section('scripts')
    <script src="{{ asset(mix('js/component.js')) }}" type="text/javascript"></script>
@endsection

@section('styles')
    <link href="https://rawgit.com/lykmapipo/themify-icons/master/css/themify-icons.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="section">
            <h3>NET Registration</h3>

            <div id="info_modal" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <h4>Registration Process</h4>
                    <br>
                    <div class="row">
                        <div class="col s12 m4">
                            <div class="icon-block">
                                <h3 class="center teal-text"><i class="material-icons">create</i></h3>
                                <h5 class="center black-text">1</h5>
                                <p class="center information-text">
                                    Fill out all fields of this registration form and acknowledge the agreement before submitting.
                                </p>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="icon-block">
                                <h3 class="center teal-text"><i class="material-icons">email</i></h3>
                                <h5 class="center black-text">2</h5>
                                <p class="center information-text">
                                    Check your email for your team's ID code and password in order to track your registration status.
                                </p>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="icon-block">
                                <h3 class="center teal-text"><i class="material-icons">cloud_upload</i></h3>
                                <h5 class="center black-text">3</h5>
                                <p class="center information-text">
                                    Once registration is accepted, use the portal to upload waivers to complete registration.
                                </p>
                            </div>
                        </div>
                    </div>
                    <p class="information-text red-text center-align">
                        All fields in the form are required unless otherwise noted.
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="modal-action modal-close waves-effect waves-green btn">Continue</button>
                </div>
            </div>

            <div id="vue-gov">
                <registration-form year="{{ getTournamentYear() }}"
                                   tour_date="{{ getFormattedTournamentDate() }}"
                                   cut_date="{{ getFormattedCutOffDate() }}"></registration-form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        new Vue({
           el: '#vue-gov'
        });

        $('select').material_select();
        $('.modal').modal({dismissible: false});

        $('#info_modal').modal('open');
    </script>

@endsection
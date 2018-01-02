@extends('layouts.team')

@section('title', 'Dashboard')

@section('content')

    @php
        $registration = json_decode($team->registration->data);

        function isAccepted($team) { return $team->accepted; }
        function isAcceptedAndForms($team) { return $team->accepted && $team->forms; }
        function isComplete($team) { return $team->accepted && $team->forms && $team->forms_reviewed; }
    @endphp

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12">
                    <ul class="tabs blue darken-2 z-depth-5">
                        <li class="tab col s3"><a class="white-text {{ !isAccepted($team) ? 'active' : '' }}" href="#registration">1.  Registration</a></li>
                        <li class="tab col s3 {{ isAccepted($team) ? '' : 'disabled' }}"><a class="white-text {{ isAccepted($team) && !$team->forms ? 'active' : '' }}" href="#waivers">2.  Waivers</a></li>
                        <li class="tab col s3 {{ isAcceptedAndForms($team) ? '' : 'disabled' }}"><a class="white-text {{ $team->forms && !$team->forms_reviewed ? 'active' : '' }}" href="#review">3.  Review</a></li>
                        <li class="tab col s3 {{ isComplete($team) ? '' : 'disabled' }}"><a class="white-text {{ isComplete($team) ? 'active' : '' }}" href="#complete">4.  Complete</a></li>
                    </ul>
                </div>
                <div id="registration" class="col s12">
                    @include('team.partials.step-registration')
                </div>
                <div id="waivers" class="col s12">
                    @if(isAccepted($team))
                        @include('team.partials.step-waivers')
                    @endif
                </div>
                <div id="review" class="col s12">
                    @if(isAcceptedAndForms($team))
                        @include('team.partials.step-review')
                    @endif
                </div>
                <div id="complete" class="col s12">
                    @if(isComplete($team))
                        @include('team.partials.step-complete')
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        $('ul.tabs').tabs();
    </script>
@endsection
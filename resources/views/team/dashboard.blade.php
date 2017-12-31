@extends('layouts.team')

@section('title', 'Dashboard')

@section('content')

    @php($registration = json_decode($team->registration->data))

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12">
                    <ul class="tabs blue darken-2 z-depth-5">
                        <li class="tab col s3 disabled"><a class="white-text active" href="#registration">1.  Registration</a></li>
                        <li class="tab col s3 disabled"><a class="white-text" href="#waivers">2.  Waivers</a></li>
                        <li class="tab col s3 disabled"><a class="white-text" href="#review">3.  Review</a></li>
                        <li class="tab col s3 disabled"><a class="white-text" href="#complete">4.  Complete</a></li>
                    </ul>
                </div>
                <div id="registration" class="col s12">
                    @include('team.partials.step-registration')
                </div>
                <div id="waivers" class="col s12">
                    @include('team.partials.step-waivers')
                </div>
                <div id="review" class="col s12">
                    @include('team.partials.step-review')
                </div>
                <div id="complete" class="col s12">
                    @include('team.partials.step-complete')
                </div>
            </div>
        </div>
    </div>

    <script>
        $('ul.tabs').tabs();
    </script>
@endsection
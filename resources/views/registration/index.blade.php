@extends('layouts.app')

@section('title','Registration')

@section('content')
    <div class="container">
        <div class="section">
            <h3>Registration</h3>
            <p class="information-text">
                We are excited that you want to participate in NET! Please carefully review the information below
                before starting on the application - we look forward to reading them.
            </p>

            <br>
            <div class="divider"></div>
            <br>

            <div class="center-align">
                <a href="{{ url('/registration/create') }}" class="btn waves-effect waves-light">Start Application
                    <i class="material-icons right">keyboard_arrow_right</i>
                </a>
            </div>

            <br>

        </div>
    </div>
@endsection
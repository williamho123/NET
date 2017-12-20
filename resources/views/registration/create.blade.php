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

            <div id="vue-gov">
                <registration-form></registration-form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        new Vue({
           el: '#vue-gov'
        });

        $('select').material_select();
    </script>

@endsection
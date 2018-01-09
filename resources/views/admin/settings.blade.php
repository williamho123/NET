@extends('layouts.admin')

@section('title', 'Settings')

@section('scripts')
    <script src="{{ asset(mix('js/component.js')) }}" type="text/javascript"></script>
@endsection

@section('content')
    <div class="container">
        <div id="vue-gov">
            <div class="section">
                <div class="row">
                    <div class="col s12 m6">
                        <closed-registration-card class="blue darken-2 z-depth-5"
                                                  :ended="{{ $registrationEnded }}"
                                                  open-date="{{ $openDate }}">
                        </closed-registration-card>
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
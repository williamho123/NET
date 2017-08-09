@extends('layouts.app')

@section('title','Contact')

@section('content')

    <div class="container">
        <div class="section">
            <h3>Contact Us</h3>
            <p class="information-text">
                Thank you for your interest in NET! Please fill out the form below if you have any questions about the tournament,
                and we will get back to you as soon as possible.
            </p>

            <br>
            <div class="divider"></div>
            <br>

            <div class="row">
                <form id="contactform" class="col s12" method="POST" action="{{ url('/contact') }}">

                    {{ csrf_field() }}

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" name="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" name="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" name="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="subject" name="subject" type="text" class="validate">
                            <label for="subject">Subject</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="message" name="message" class="materialize-textarea" data-length="1500"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('errors.modal')

    <script type="text/javascript">
        jQuery(document).ready(function () {
            $('#contactform').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '/contact',
                    data: new FormData($(this)[0]),
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        Materialize.toast('Form successfully submitted!', 4000);
                        $('#contactform')[0].reset();
                        Materialize.updateTextFields();
                    },
                    error: function (data) {
                        if (data.status === 500) {
                            $('#500message').text(data.responseJSON['message']);
                            $('#500modal').modal('open');
                        } else {
                            var list = errorsJSONToList(data);
                            $('#alerts').show().html(list);
                            $('#alertmodal').modal('open');
                        }
                    }
                });
            })
        });
    </script>
@endsection
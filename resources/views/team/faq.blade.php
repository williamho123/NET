@extends('layouts.team')

@section('title', "FAQ's")

@section('content')

    @php($email = env('ADMIN_EMAIL'))

    <div class="container">
        <div class="section">
            <ul class="collapsible popout" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header information-text"><i class="material-icons">timeline</i> What's the timeline of steps after submitting my registration? </div>
                    <div class="collapsible-body">
                        First, we will review the information you have provided us. Once your registration has been accepted,
                        you will receive waivers that every team member and advisor need to sign and upload into this portal. Then,
                        we will review those waivers, and when they are approved, your registration will be complete!
                    </div>
                </li>
                <li>
                    <div class="collapsible-header information-text"><i class="material-icons">timer</i> When will my registration status be updated?</div>
                    <div class="collapsible-body">
                        Registration status updates typically take up to 2-3 business days once we receive it. If you have not
                        received an update after 3 business days, please email us at <a href="mailto:{{ $email }}">{{ $email }}.</a>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header information-text"><i class="material-icons">av_timer</i> When will my waivers be approved?</div>
                    <div class="collapsible-body">
                        Waiver approvals typically take up to to 2-3 business days once we receive it. If your waivers have not been
                        approved after 3 business days, please email us at <a href="mailto:{{ $email }}">{{ $email }}.</a>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header information-text"><i class="material-icons">question_answer</i> Why do my waivers need to be approved?</div>
                    <div class="collapsible-body">
                        We as the organizing team just want to make sure the waivers uploaded are accurately filled out. In most cases,
                        this step will require nothing else from you or your team, but in rare instances, we will reach out for any changes needed.
                    </div>
                </li>
                <li>
                    <div class="collapsible-header information-text"><i class="material-icons">create</i>I need to change my registration info. What do I do?</div>
                    <div class="collapsible-body">
                        Please email us at <a href="mailto:{{ $email }}">{{ $email }}</a> with the requested changes.
                    </div>
                </li>
                <li>
                    <div class="collapsible-header information-text"><i class="material-icons">track_changes</i> Can I change my team's ID code or login password? </div>
                    <div class="collapsible-body">
                        Unfortunately, we do not support ID code or password changes at this time. If enough demand arises, it will be added
                        in the future.
                    </div>
                </li>
                <li>
                    <div class="collapsible-header information-text"><i class="material-icons">storage</i> How long can I expect to be on the waitlist? </div>
                    <div class="collapsible-body">
                        We cannot say for certain about the time frame, but we will notify you as soon as we are able to accommodate
                        you at NET this year. In general, the latest we will notify you about openings will be three weeks prior to the
                        tournament date.
                    </div>
                </li>
                <li>
                    <div class="collapsible-header information-text"><i class="material-icons">bug_report</i>I've noticed the dashboard functioning weirdly. How should I proceed?</div>
                    <div class="collapsible-body">
                        Congrats, you've probably found a bug! Please send an email to <a href="mailto:{{ $email }}">{{ $email }}</a>
                        with a couple screenshots of the weird/malfunctioning dashboard and the steps to reproduce the issue. Thanks for helping
                        improve our website!
                    </div>
                </li>
            </ul>

        </div>
    </div>

@endsection
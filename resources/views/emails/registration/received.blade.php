@component('mail::message')
# Hey There!

We've received your registration for NET {{ getTournamentYear() }}. Please sit tight for 2-3 business days as we review
the information you've provided.

Below, you can find the login credentials for your team on our website. You may use the portal to check the status of
your registration and to complete next steps (i.e. uploading waivers), if necessary.

We will also notify you as soon as your registration status is updated. <br><br>

## Team Login Credentials
@component('mail::panel')
<b>ID Code: </b>{{ $team->team_id_code }}<br>
<b>Password: </b> {{ $pw }}
@endcomponent

@component('mail::button', ['url' => 'https://nuecontournament.org/team', 'color' => 'teal'])
Check Registration Status
@endcomponent

Please email us at {{ env('ADMIN_EMAIL') }} if you have any questions - we are excited to see you at the tournament!

Thanks,<br>
NET Team
@endcomponent


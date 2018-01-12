@component('mail::message')
# Hey There!

Your waivers have been approved, and your team's registration for NET {{ getTournamentYear() }} is now <b>complete!</b>
Remember, should your plans change, it is <span style="font-style: italic">mandatory</span> you notify us by {{ getFormattedCutOffDate()}} to avoid penalties.

Be on the lookout in the coming weeks for final tournament logistics. In the meantime, check out our Tournament page
to stay up to date on our speaker lineup and to see some sample questions.

@component('mail::button', ['url' => 'https://nuecontournament.org/tournament', 'color' => 'teal'])
    The Tournament
@endcomponent

Please email us at {{ env('ADMIN_EMAIL') }} if you have any questions - we are excited to see you at the tournament
on {{ getFormattedTournamentDate() }}!

Thanks,<br>
NET Team
@endcomponent


@extends('layouts.admin')

@section('title', 'Registrations')

@section('scripts')
     <script src="{{ asset('js/link-http-request.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <br>

        <h4>Current</h4>
        <div class="information-text">Registrations in the past 6 months.</div>
        <br>
        @if($currentTeams->isEmpty())
            <div class="information-text">
                <b>No active registrations in the previous 6 months.</b>
            </div>
        @else
            <table class="striped responsive-table">
                <thead>
                    <tr>
                        <th>ID Code</th>
                        <th>School Name</th>
                        <th>Decision</th>
                        <th>Waivers</th>
                        <th>Submitted On</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($currentTeams as $current)
                        @php
                            $message = '';
                            $class = '';
                            $waiver = '---';
                            $style = '';
                            if ($current->accepted) {
                                $message = 'Accepted';
                                $class = 'green-text lighten-2';

                                if ($current->forms && $current->forms_reviewed) {
                                    $waiver = 'Yes';
                                    $style = 'green-text lighten-2';
                                } elseif ($current->forms && !$current->forms_reviewed) {
                                    $waiver = 'Review';
                                    $style = 'amber-text darken-3';
                                } elseif (!$current->forms && !$current->forms_reviewed) {
                                    $waiver = 'No';
                                    $style = 'red-text darken-2';
                                }

                            } elseif ($current->waitlisted) {
                                $message = 'Waitlisted';
                                $class = 'amber-text darken-3';
                            } elseif ($current->rejected) {
                                $message = 'Rejected';
                                $class = 'red-text darken-2';
                            } else {
                                $message = 'Undecided';
                                $class = 'blue-text darken-2';
                            }
                        @endphp

                        <tr>
                            <td>{{ $current->team_id_code }}</td>
                            <td>{{ $current->school }}</td>
                            <td class="{{ $class }}">{{ $message }}</td>
                            <td class="{{ $style }}">{{ $waiver }}</td>
                            <td>{{ $current->created_at }}</td>
                            <td>
                                <a href="{{ action('AdminController@viewRegistration', [$current->id]) }}" class="btn waves-effect waves-light">View
                                    <i class="material-icons right">remove_red_eye</i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <br>
        <div class="divider"></div>
        <br>

        <h4>Archived</h4>
        <div class="information-text">Previous registrations dating farther back than 6 months.</div>
        <br>

        @if($archivedTeams->isEmpty())
            <div class="information-text">
                <b>No archived registrations.</b>
            </div>
        @else

        @endif
    </div>
@endsection
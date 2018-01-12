@extends('layouts.admin')

@section('title', 'Registrations')

@section('scripts')
    <script src="{{ asset('js/link-http-request.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
@endsection

@section('styles')
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <br>

        <h4>Current</h4>
        @if($currentTeams->isEmpty())
            <div class="information-text">
                <b>No active registrations.</b>
            </div>
        @else
            <table id="current_table" class="striped centered responsive-table">
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
                            <td>{{ \Carbon\Carbon::parse($current->created_at)->format('F jS, Y | g:i A') }}</td>
                            <td>
                                <a href="{{ action('AdminController@viewRegistration', [$current->id]) }}" class="btn waves-effect waves-light">View
                                    <i class="material-icons right">remove_red_eye</i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <br><br>
        <div class="divider"></div>
        <br><br>

        <h4>Archived</h4>

        @if($archivedTeams->isEmpty())
            <div class="information-text">
                <b>No archived registrations.</b>
            </div>
        @else
            <table id="archived_table" class="striped centered responsive-table">
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
                @foreach($archivedTeams as $archived)
                    @php
                        $message = '';
                        $class = '';
                        $waiver = '---';
                        $style = '';
                        if ($archived->accepted) {
                            $message = 'Accepted';
                            $class = 'green-text lighten-2';

                            if ($archived->forms && $archived->forms_reviewed) {
                                $waiver = 'Yes';
                                $style = 'green-text lighten-2';
                            } elseif ($archived->forms && !$archived->forms_reviewed) {
                                $waiver = 'Review';
                                $style = 'amber-text darken-3';
                            } elseif (!$archived->forms && !$archived->forms_reviewed) {
                                $waiver = 'No';
                                $style = 'red-text darken-2';
                            }

                        } elseif ($archived->waitlisted) {
                            $message = 'Waitlisted';
                            $class = 'amber-text darken-3';
                        } elseif ($archived->rejected) {
                            $message = 'Rejected';
                            $class = 'red-text darken-2';
                        } else {
                            $message = 'Undecided';
                            $class = 'blue-text darken-2';
                        }
                    @endphp

                    <tr>
                        <td>{{ $archived->team_id_code }}</td>
                        <td>{{ $archived->school }}</td>
                        <td class="{{ $class }}">{{ $message }}</td>
                        <td class="{{ $style }}">{{ $waiver }}</td>
                        <td>{{ \Carbon\Carbon::parse($archived->created_at)->format('F jS, Y | g:i A') }}</td>
                        <td>
                            <a href="{{ action('AdminController@viewRegistration', [$archived->id]) }}" class="btn waves-effect waves-light">View
                                <i class="material-icons right">remove_red_eye</i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif

        <br>
    </div>

    <script type="text/javascript">
        $(function() {
            $('table').DataTable({
                'ordering': false,
            });
            $('select').material_select();
        });

    </script>
@endsection
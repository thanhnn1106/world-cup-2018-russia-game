@extends('front.layout')
@section('content')

<div class="container paddings-mini">
    <div class="row">

        <div class="col-lg-12">
            <h3 class="clear-title">Matches</h3>
        </div>

        <div class="col-lg-12">
            <table class="table-responsive table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Round</th>
                        <th>Group</th>
                        <th>Match name</th>
                        <th>Result</th>
                        <th>Status</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($matchList) <= 0)
                    <tr><td colspan="7" align="center">Data not found</td></tr>
                    @else
                    @foreach($matchList as $match)
                    <tr>
                        <td>{{ $match->id }}</td>
                        <td>{{ $match->round }}</td>
                        <td>{{ $match->group }}</td>
                        <td>
                            <div>
                                <table style="border: none !important;" border="0" cellspacing="0" cellpadding="0">
                                    <tr style="border: none;">
                                        <td style="width: 40%; border: none;">
                                            @if ($match->id < 49)
                                            <img src="{{ asset_front('img/clubs-logos') }}/{{ $match->getFlag($match->home_team) }}" alt="icon1">
                                            @endif
                                            <strong style="line-height: 2.8em;">{{ $match->home_team }}</strong>
                                        </td>
                                        <td style="width: 20%; border: none;;" class="text-center">vs</td>
                                        <td style="width: 40%;; border: none;">
                                            <strong style="line-height: 2.8em;">{{ $match->away_team }}</strong>
                                            @if ($match->id < 49)
                                            <img src="{{ asset_front('img/clubs-logos') }}/{{ $match->getFlag($match->away_team) }}" alt="icon">
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                        <td>{{ $match->home_score }} - {{ $match->away_score }}</td>
                        <td>{{ $status[$match->status] }}</td>
                        <td>{{ $match->match_date }} <br /> {{ $match->location }}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

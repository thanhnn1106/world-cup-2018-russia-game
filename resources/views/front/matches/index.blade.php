@extends('front.layout')
@section('content')

<div class="container paddings-mini">
    <div class="row">

        <div class="col-lg-12">
            <h3 class="clear-title">Matches</h3>
        </div>

        <div class="col-lg-12">
            <table class="table-striped table-responsive table-hover">
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
                        <td style="width:5%">{{ $match->id }}</td>
                        <td style="width:5%">{{ $match->round }}</td>
                        <td style="width:10%">{{ $match->group }}</td>
                        <td style="width:40%">
                            <div style="width: 40%; float: left;">
                                @if ($match->id < 49)
                                <img src="{{ asset_front('img/clubs-logos') }}/{{ $match->getFlag($match->home_team) }}" alt="icon1">
                                @endif
                                <strong style="line-height: 2.8em;">{{ $match->home_team }}</strong>
                            </div>
                            <div style="width: 20%; float: left; line-height: 2.8em;">
                                vs
                            </div>
                            <div style="width: 40%; float: left;">
                                <strong style="line-height: 2.8em;">{{ $match->away_team }}</strong>
                                @if ($match->id < 49)
                                <img src="{{ asset_front('img/clubs-logos') }}/{{ $match->getFlag($match->away_team) }}" alt="icon">
                                @endif
                            </div>
                        </td>
                        <td style="width:10%">{{ $match->home_score }} - {{ $match->away_score }}</td>
                        <td style="width:10%">{{ $status[$match->status] }}</td>
                        <td style="width:20%">{{ $match->match_date }} <br /> {{ $match->location }}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

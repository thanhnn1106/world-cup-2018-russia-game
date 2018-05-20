@extends('front.layout')
@section('content')

<div class="container paddings-mini">
    <div class="row">
        <div class="col-lg-12">
            <table class="table-striped table-responsive table-hover result-point">
                <thead class="point-table-head">
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Match</th>
                        <th class="text-center">Match result</th>
                        <th class="text-center">Predict team win</th>
                        <th class="text-center">Predict score</th>
                        <th class="text-center">Match status</th>
                        <th class="text-center">Use lucky star</th>
                        <th class="text-center">Point</th>
                        <th class="text-center">Date prediction</th>
                    </tr>
                </thead>

                <tbody class="text-center">
                    <?php $i = 1; ?>
                    @if (count($userHistoryList) <= 0)
                    <tr><td colspan="8" align="center">Data not found</td></tr>
                    @else
                    @foreach ($userHistoryList as $item)
                    <tr>
                        <td class="text-center number">{{ $i }}</td>
                        <td class="text-left" style="width: 50%;">
                            <div style="width: 40%; float: left;">
                                <img src="{{ asset_front('img/clubs-logos') }}/{{ App\Models\User::getFlag($item->match_home_team) }}" alt="icon1">
                                <strong style="line-height: 2.0em;">{{ $item->match_home_team }}</strong>
                            </div>
                            <div style="width: 20%; float: left;">
                                vs
                            </div>
                            <div style="width: 40%; float: left;">
                                <strong style="line-height: 2.0em;">{{ $item->match_away_team }}</strong>
                                <img src="{{ asset_front('img/clubs-logos') }}/{{ App\Models\User::getFlag($item->match_away_team) }}" alt="icon">
                            </div>
                        </td>
                        <td class="text-center">{{ $item->match_home_score }} - {{ $item->match_away_score }}</td>
                        <td class="text-center">
                            @if ($item->user_pre_team_win == 0)
                            Draw
                            @elseif ($item->user_pre_team_win == 1)
                            {{ $item->match_home_team }}
                            @else
                            {{ $item->match_away_team }}
                            @endif
                        </td>
                        <td class="text-center">{{ $item->user_pre_home_score }} - {{ $item->user_pre_away_score }}</td>
                        <td class="text-center">
                            <?php
                                $matchColor = '';
                                if ($item->match_status == 3) {
                                    $matchColor = 'secondary';
                                } else if ($item->match_status == 2) {
                                    $matchColor = 'warning';
                                } else if ($item->match_status == 1) {
                                    $matchColor = 'success';
                                } else if ($item->match_status == 0) {
                                    $matchColor = 'info';
                                }
                            ?>
                            <div class="badge badge-{{ $matchColor }}">
                                {{ $match_status[$item->match_status] }}
                            </div>
                        </td>
                        <td class="text-center">{{ ($item->user_is_lucky_star == 0) ? 'No' : 'Yes' }}</td>
                        <td class="text-center">{{ $item->user_point }}</td>
                        <td class="text-center" style="width: 10%;">{{ $item->created_at }}</td>
                    </tr>
                    <?php ++$i; ?>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

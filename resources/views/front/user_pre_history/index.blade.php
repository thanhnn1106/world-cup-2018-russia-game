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
                        <th class="text-center">User predict match</th>
                        <th class="text-center">User predict score</th>
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
                        <td class="text-left">
                            <div>
                                <table style="border: none !important;" border="0" cellspacing="0" cellpadding="0">
                                    <tr style="border: none;">
                                        <td style="width: 40%; border: none;">
                                            <img src="{{ asset_front('img/clubs-logos') }}/{{ App\Models\User::getFlag($item->match_home_team) }}" alt="icon1">
                                            <strong style="line-height: 2.0em;">{{ $item->match_home_team }}</strong>
                                        </td>
                                        <td style="width: 5%; border: none;;" class="text-center">vs</td>
                                        <td style="width: 40%;; border: none;">
                                            <strong style="line-height: 2.0em;">{{ $item->match_away_team }}</strong>
                                            <img src="{{ asset_front('img/clubs-logos') }}/{{ App\Models\User::getFlag($item->match_away_team) }}" alt="icon">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                        <td class="text-center">{{ $item->match_home_score }} - {{ $item->match_away_score }}</td>
                        <td class="text-center">{{ $item->user_pre_home_score }} - {{ $item->user_pre_away_score }}</td>
                        <td class="text-center">{{ $item->user_pre_team_win }}</td>
                        <td class="text-center">{{ $item->match_status }}</td>
                        <td class="text-center">{{ ($item->user_is_lucky_star == 0) ? 'No' : 'Yes' }}</td>
                        <td class="text-center">{{ $item->user_point }}</td>
                        <td class="text-center">{{ $item->created_at }}</td>
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

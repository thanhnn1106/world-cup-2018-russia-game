@extends('front.layout')
@section('content')

<div class="container paddings-mini">
    <div class="row">
        <div class="col-lg-12">
            <table class="table-striped table-responsive table-hover result-point">
                <thead class="point-table-head">
                    <tr>
                        <th class="text-left">Rank</th>
                        <th class="text-left">Email</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Total matches predict</th>
                        <th class="text-center">Total win (Win/Draw/Lose)</th>
                        <th class="text-center">Total win (Correct Score)</th>
                        <th class="text-center">Lucky star</th>
                        <th class="text-center">Total point</th>
                    </tr>
                </thead>

                <tbody class="text-center">
                    <?php $i = 1; ?>
                    @if (count($userRankingList) <= 0)
                    <tr><td colspan="8" align="center">Data not found</td></tr>
                    @else
                    @foreach ($userRankingList as $item)
                    <tr @if ($i == 1 || $i == 2 || $i == 3) style="background-color: #FFFFFF;" @else style="background-color: #F9F9F9;" @endif>
                        <td class="text-left number">{{ $i }}</td>
                        <td class="text-left">{{ $item->email }}</td>
                        <td class="text-left">{{ $item->name }}</td>
                        <td>{{ $item->total_match_predict }}</td>
                        <td>{{ ($item->total_win_match == '') ? '0' : $item->total_win_match }}</td>
                        <td>{{ ($item->total_win_score == '') ? '0' : $item->total_win_score }}</td>
                        <td>{{ ($item->luckystar == 0) ? '1' : '0' }}</td>
                        <td>{{ ($item->total_point == '') ? '0' : $item->total_point }}</td>
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

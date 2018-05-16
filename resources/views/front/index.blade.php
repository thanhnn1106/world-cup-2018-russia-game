@extends('front.layout')
@section('content')

<!-- Parallax Section - Players -->
<div class="parallax-section parallax-total" style="background:url({{ asset_front('img/slide/1.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="recent-results results-page">
                    <h1 class="center">Today Matches</h1>
                    @if (count($todayMatch) > 0)
                    <div class="info-results">
                        <ul>
                            @foreach ($todayMatch as $item)
                            <li>
                                <span class="head">
                                    {{ $item->location }} <span class="date">{{ $item->match_date }}</span>
                                </span>

                                <div class="goals-result">
                                    <a href="single-team.html" style="margin-top: 0px;">
                                        <img src="{{ asset_front('img/clubs-logos') }}/{{ $item->getFlag($item->home_team) }}" alt="">
                                        {{ $item->home_team }}
                                    </a>

                                    <span class="goals" style="width: 20%">
                                        <input style="width: 40%;" type="number" name="home_score" />
                                        <span style="color: black;">    -    </span> 
                                        <input style="width: 40%;" type="number" name="away_score" />
                                    </span>

                                    <a href="single-team.html" style="margin-top: 0px;">
                                        <img src="{{ asset_front('img/clubs-logos') }}/{{ $item->getFlag($item->away_team) }}" alt="">
                                        {{ $item->away_team }}
                                    </a>
                                </div>
                                <div class="goals-result">
                                    <label class="container">Win
                                        <input type="radio" checked="checked" name="match_result">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Draw
                                        <input type="radio" checked="checked" name="match_result">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Win
                                        <input type="radio" checked="checked" name="match_result">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Gray Section - Players -->
@endsection

@extends('front.layout')
@section('content')

<!-- Parallax Section - Players -->
<div class="parallax-section parallax-total" style="background:url({{ asset_front('img/slide/wc14.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="recent-results results-page">
                    @include('notifications')
                    <h1 class="center">Today Matches</h1>
                    @if (count($todayMatch) > 0)
                    <div class="info-results">
                        <ul>
                            @foreach ($todayMatch as $item)
                                <li>
                                    <form id="match_{{ $item->id }}" method="POST" action="{{ route('front.predict') }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="match_id" value="{{ $item->id }}" />
                                        <span class="head">
                                            {{ $item->location }}<span class="date col-lg-4">{{ $item->match_date }}</span><span class="date col-lg-4 pull-left text-uppercase">{{ $item->group }}</span>
                                        </span>

                                        <div class="goals-result">
                                            <a href="single-team.html" style="margin-top: 0px;">
                                                <img src="{{ asset_front('img/clubs-logos') }}/{{ $item->getFlag($item->home_team) }}" alt="">
                                                {{ $item->home_team }}
                                            </a>

                                            <span class="goals" style="width: 20%">
                                                <input min="0" style="width: 40%;text-align: center;" type="number" name="home_score" value="{{ $item->home_score }}" />
                                                <span style="color: black;">    -    </span> 
                                                <input min="0" style="width: 40%;text-align: center;" type="number" name="away_score"  value="{{ $item->away_score }}" />
                                            </span>

                                            <a href="single-team.html" style="margin-top: 0px;">
                                                <img src="{{ asset_front('img/clubs-logos') }}/{{ $item->getFlag($item->away_team) }}" alt="">
                                                {{ $item->away_team }}
                                            </a>
                                        </div>
                                        <div class="goals-result">
                                            <label class="container">{{ $item->home_team }} Win
                                                <input type="radio" value="1" @if ($item->team_win == 1) checked="checked" @endif name="match_result">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">Draw
                                                <input type="radio" value="0" @if ($item->team_win == 0) checked="checked" @endif name="match_result">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">{{ $item->away_team }} Win
                                                <input type="radio" value="2" @if ($item->team_win == 2) checked="checked" @endif name="match_result">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        @if($isLogged)
                                        @if ($user->luckystar == 1)
                                        <span class="head text-center" style="padding:10px 0px;">
                                            <input type="checkbox" value="1" name="is_lucky_star" @if ($item->is_lucky_star == 1) checked="checked" @endif /><label>Use lucky star</label>
                                        </span>
                                        @endif
                                        <span class="head text-center" style="padding:0px;">
                                            <button class="btn btn-success text-light" style="margin: 10px 10px;">Save</button>
                                        </span>
                                        @endif
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="item-boxed-img">
                    <i class="fa fa-user"></i>
                    <h4>Number of users </h4>
                    <h1>{{ $numberOfUsers }}</h1>
                </div>
            </div>

            <div class="col-md-6 col-xl-6">
                <div class="item-boxed-img">
                    <i class="fa fa-money"></i>
                    <h4>Total prize</h4>
                    <h1>{{ number_format($numberOfUsers * 200000, 0) }} VNĐ</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Gray Section - Players -->
@endsection

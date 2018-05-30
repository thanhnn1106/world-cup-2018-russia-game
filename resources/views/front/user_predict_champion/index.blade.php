@extends('front.layout')
@section('content')


<section class="content-info">

    <div class="container paddings">
        <!-- Content Text-->
        <div class="panel-box block-form">
            @include('notifications')
            <div class="titles text-center">
                <h4>Predict Champion</h4>
            </div>
            <div class="info-panel">
                <form enctype="multipart/form-data" id="predictChampion" class="form-horizontal padding-top-mini" method="POST" action="{{ route('front.predict_champion') }}">
                    {{ csrf_field() }}
                    <div class="row form-group col-md-12">
                        <label class="control-label col-sm-4">Select team</label>
                        <div class="col-sm-8">
                            <select id="teamId" name="teamId" class="form-control" required="">
                                @if (count($teamList) > 0)
                                @foreach ($teamList as $item)
                                <option @if ($chkExistRecord == $item->id) selected='selected' @endif value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="row form-group col-md-12">
                        <div class="offset-sm-4 col-sm-5">
                            <button type="submit" class="bnt btn-iw">Save</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-6 col-xl-6">
                        <div class="item-boxed-img">
                            <i class="fa fa-user"></i>
                            <h4>Number of users </h4>
                            <h1>{{ $totalUser }}</h1>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-6">
                        <div class="item-boxed-img">
                            <i class="fa fa-money"></i>
                            <h4>Total prize</h4>
                            <h1>{{ number_format($totalUser * 2, 0) }} ly Gongcha</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Content Text-->
    </div>

</section>
<!-- End Section Area -  Content Central -->

@endsection

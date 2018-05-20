@extends('front.layout')
@section('content')


<section class="content-info">

    <div class="container paddings">
        <!-- Content Text-->
        <div class="panel-box block-form">
            @include('notifications')
            <div class="titles text-center">
                <h4>Change password</h4>
            </div>
            <div class="info-panel">
                <form enctype="multipart/form-data" id="changePass" class="form-horizontal padding-top-mini" method="POST" action="{{ route('front.change_password') }}">
                    {{ csrf_field() }}
                    <div class="row form-group col-md-12">
                        <label class="control-label col-sm-4">Current password</label>
                        <div class="col-sm-8">
                            <input type="password" id="current_password" name="current_password" class="form-control" placeholder="Type your current password" required="">
                        </div>
                    </div>
                    <div class="row form-group col-md-12">
                        <label class="control-label col-sm-4">New password</label>
                        <div class="col-sm-8">
                            <input type="password" id="new_password" name="new_password" class="form-control @if ($errors->has('new_password'))is-invalid @endif" placeholder="Type your new password" required="">
                            @if ($errors->has('new_password'))
                            <div class="invalid-feedback">{{ $errors->first('new_password') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="row form-group col-md-12">
                        <label class="control-label col-sm-4">Confirm new password</label>
                        <div class="col-sm-8">
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control @if ($errors->has('confirm_password'))is-invalid @endif" placeholder="Type your new password again" required="">
                            @if ($errors->has('confirm_password'))
                            <div class="invalid-feedback">{{ $errors->first('confirm_password') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="row form-group col-md-12">
                        <div class="offset-sm-4 col-sm-5">
                            <button type="submit" class="bnt btn-iw">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- End Content Text-->
    </div>

</section>
<!-- End Section Area -  Content Central -->

@endsection

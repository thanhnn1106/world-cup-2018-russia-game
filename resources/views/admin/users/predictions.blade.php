@extends('admin.layout')
@section('content')
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">User</li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        @include('notifications')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h1>User Predictions</h1>
                    </div>
                    <div class="card-header">
                        <form id="search" method="GET" action="{{ route('admin.user.predictions') }}">
                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="email" type="text" class="form-control" placeholder="Enter user email..." value="{{ $email }}" />
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary">Go!</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{ csrf_field() }}
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Match</th>
                                        <th>Predict match</th>
                                        <th>Predict score</th>
                                        <th>Is lucky star</th>
                                        <th>Point</th>
                                        <th>Created at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($userHistoryList->count() == 0)
                                        <tr><td colspan="8" align="center">Data not found</td></tr>
                                    @else
                                    <?php $i = ($userHistoryList->currentpage()-1) * $userHistoryList->perpage() + 1; ?>
                                    @foreach($userHistoryList as $item)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $item->user_name }}</td>
                                        <td>{{ $item->user_email }}</td>
                                        <td>{{ $item->match_home_team }} {{ $item->match_home_score }} - {{ $item->match_away_score }} {{ $item->match_away_team }}</td>
                                        <td>{{ $item->user_pre_team_win }}</td>
                                        <td>{{ $item->user_pre_home_score }} - {{ $item->user_pre_away_score }}</td>
                                        <td>{{ $item->user_is_lucky_star }}</td>
                                        <td>{{ $item->user_point }}</td>
                                        <td>{{ $item->created_at }}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" role="status" aria-live="polite">Showing {{ $userHistoryList->firstItem() }} to {{ $userHistoryList->count() }} of {{ $userHistoryList->total() }} entries</div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers">
                                    {{ $userHistoryList->appends(request()->input())->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer_script')
@endsection
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
                        <h1>Users</h1>
                        <a class="btn btn-success btn-xs" href="{{ route('admin.users.add') }}">Thêm mới</a>
                    </div>
                    <div class="card-header">
                        <form id="searchUser" method="GET" action="{{ route('admin.users') }}">
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
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <select class="form-control" name="filter_status" onchange="this.form.submit();">
                                                <option value="">All</option>
                                                @foreach ($status as $key => $value)
                                                <option @if ($filter_status != '' && (int)$key === (int)$filter_status) selected="selected" @endif value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
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
                                        <th>Email</th>
                                        <th>Tên tài khoản</th>
                                        <th>Lucky star</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày tạo</th>
                                        <th>Ngày cập nhật</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($users->count() == 0)
                                        <tr><td colspan="8" align="center">Data not found</td></tr>
                                    @else
                                    <?php $i = ($users->currentpage()-1) * $users->perpage() + 1; ?>
                                    @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->luckystar }}</td>
                                        <td>
                                            <div class="badge badge-{{ ($user->status == 0) ? 'warning' : 'primary' }}">
                                                {{ config('site.user_status.label')[$user->status] }}
                                            </div>
                                        </td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.users.edit', ['userId' => $user->id]) }}" class="btn btn-warning btn-xs">
                                                Cập nhật
                                            </a>
                                            <a href="javascript:void(0);" onclick="return fncDeleteConfirm(this);"
                                               data-message="Are you sure delete this user?"
                                               data-url="{{ route('admin.users.delete', ['userId' => $user->id]) }}"
                                               class="btn btn-danger btn-xs">
                                               Xoá
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" role="status" aria-live="polite">Showing {{ $users->firstItem() }} to {{ $users->count() }} of {{ $users->total() }} entries</div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers">
                                    {{ $users->appends(request()->input())->links() }}
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
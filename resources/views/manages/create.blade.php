@extends('layouts.app')

@section('title', 'add manage')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                Add Manage
            </div>
            <div class="form-group">
                <form method="POST" action="{{ route('manages.store') }}" enctype="multipart/form-data">
                    @csrf
                    .<div class="form-group">
                        <label>Mã Đại Lý</label>
                        <input type="text" name="agent_code" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tên Đại Lý</label>
                        <input type="text" name="agent_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tên Người Quản Lý</label>
                        <input type="text" name="name_manage" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Trạng Thái</label>
                        <select class="form-control" name="status">
                            <option value="Đang Hoạt Động">Đang Hoạt Động</option>
                            <option value="Ngừng Hoạt Động">Ngừng Hoạt Động</option>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add New</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </div>
        </div>
    </div>






@endsection

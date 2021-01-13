@extends('layouts.app')

@section('title', 'Update Mange')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Update Manage</h1>
            </div>
            <div class="form-group">
                <form method="POST" action="{{ route('manages.update', $manage->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Mã Đại Lý</label>
                        <input type="text" name="agent_code" value="{{ $manage->agent_code }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tên Đaị Lý</label>
                        <input type="text" name="agent_name" value="{{ $manage->agent_name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" value="{{ $manage->phone }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ $manage->email }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tên Người Quản Lý</label>
                        <input type="text" name="name_manage" value="{{ $manage->name_manage }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label></label>
                        <select class="form-control" name="status">
                            <option value="Đang Hoạt Động">Đang Hoạt Động</option>
                            <option value="Ngừng Hoạt Động">Ngừng Hoạt Động</option>
                        </select>
                    </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>

    </div>















@endsection

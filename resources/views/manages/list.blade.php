@extends('layouts.app')

@section('title', 'Manage')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                Manage
            </div>
            <div class="card-header">
            <a href="{{ route('manages.create') }}" class="btn btn-primary">Add</a>
            </div>
            <div class="table">
                <table class="table table-triped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã Số Đại Lý</th>
                            <th>Tên Đại Lý</th>
                            <th>Điện Thoại</th>
                            <th>Email</th>
                            <th>Địa Chỉ</th>
                            <th>Tên Người Quản Lý</th>
                            <th>Trạng Thái</th>
                            <th>Chức Năng</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($manages as $key => $manage )
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $manage->agent_code }}</td>
                                <td>{{ $manage->agent_name }}</td>
                                <td>{{ $manage->phone }}</td>
                                <td>{{ $manage->email }}</td>
                                <td>{{ $manage->address }}</td>
                                <td>{{ $manage->name_manage }}</td>
                                <td>{{ $manage->status }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('manages.edit', $manage->id) }}">Update</a>
                                    <a class="btn btn-danger" href="{{ route('manages.destroy', $manage->id) }}" onclick="return confirm('Do You delete?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




@endsection

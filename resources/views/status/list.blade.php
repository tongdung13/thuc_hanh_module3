@extends('layouts.app')

@section('title', 'status')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                Status
            </div>
            <div class="card-header">
                <a href="{{ route('status.create') }}" class="btn btn-primary">Add</a>
            </div>
            <div class="table">
                <table class="table table-teiped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($statuses as $key => $status )
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $status->name }}</td>
                                <td>
                                    <a href="{{ route('status.edit', $status->id) }}" class="btn btn-primary">Update</a>
                                    <a href="{{ route('status.destroy', $status->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>







@endsection

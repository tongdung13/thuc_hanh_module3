@extends('layouts.app')

@section('title', 'Add status')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                Add Status
            </div>
            <div class="form-group">
                <form method="POST" action="{{ route('status.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit">Add</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>
        </div>
    </div>



@endsection


@extends('layouts.app')

@section('title', 'Category')

@section('content')

    <div class="container">
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="">
            </div>
            <button type="submit" class="btn btn-sm btn-outline-success">Add</button>
        </form>
        <a href="" onclick="window.history.back; return false">Back</a>
    </div>

@endsection

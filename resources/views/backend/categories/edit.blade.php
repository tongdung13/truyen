@extends('layouts.app')

@section('title', 'Update Category')

@section('content')

    <div class="container">
        <h3 style="color: brown">Update Category</h3>
        <form action="{{ route('categories.update', $categories->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $categories->name }}" id="">
                @if ($errors->any())
                    <p style="color: red">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <button type="submit" class="btn btn-sm btn-outline-success">Update</button>
        </form>
        <a href="" onclick="window.history.back(-1); return false">Back</a>
    </div>

@endsection

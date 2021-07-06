@extends('layouts.app')

@section('title', 'Create Novel')

@section('content')

    <div class="container">
        <h3 style="color: brown">Create Novel</h3>
        <form action="{{ route('novels.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="">
                @if ($errors->any())
                    <p style="color: red">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Chapter</label>
                <input type="text" name="chapter" class="form-control" value="{{ old('chapter') }}" id="">
                @if ($errors->any())
                    <p style="color: red">{{ $errors->first('chapter') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" class="ckeditor form-control">{{old('content') }}</textarea>
                @if ($errors->any())
                    <p style="color: red">{{ $errors->first('content') }}</p>
                @endif
            </div>
            <button type="submit" class="btn btn-sm btn-outline-success">Add</button>
        </form>
        <a href="" onclick="window.history.back(-1); return false">Back</a>
    </div>

@endsection

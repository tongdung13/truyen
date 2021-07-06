@extends('layouts.app')

@section('title', 'Update Novel')

@section('content')

    <div class="container">
        <h3 style="color: brown">Update Novel</h3>
        <form action="{{ route('novels.update', $novels->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $novels->name }}" id="">
                @if ($errors->any())
                    <p style="color: red">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Chapter</label>
                <input type="text" name="chapter" class="form-control" value="{{ $novels->chapter }}" id="">
                @if ($errors->any())
                    <p style="color: red">{{ $errors->first('chapter') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" class="ckeditor form-control">{{ $novels->content }}</textarea>
                @if ($errors->any())
                    <p style="color: red">{{ $errors->first('content') }}</p>
                @endif
            </div>
            <button type="submit" class="btn btn-sm btn-outline-success">Update</button>
        </form>
        <a href="" onclick="window.history.back(-1); return false">Back</a>
    </div>

@endsection

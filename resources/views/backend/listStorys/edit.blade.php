@extends('layouts.app')

@section('title', 'Update List Story')

@section('content')

    <div class="container">
        <h3 style="color: brown">Update List Story</h3>
        <form action="{{ route('listStorys.update', $listStorys->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $listStorys->name }}" id="">
                @if ($errors->any())
                    <p style="color: red">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <button type="submit" class="btn btn-sm btn-outline-success">Update</button>
        </form>
        <a href="" onclick="window.history.back(-1); return false">Back</a>
    </div>

@endsection

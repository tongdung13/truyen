@extends('layouts.app')

@section('title', 'Create Story Name Novel')

@section('content')

    <div class="container">
        <h3 style="color: brown">Create Story Name Novel</h3>
        <form action="{{ route('storyNovels.store', $storyNames->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <h3 style="margin-left: 43%">{{ $storyNames->name }}</h3>
            </div>
            <div class="form-group">
                <label>Chương</label>
                <select name="novel_id[]" class="select2 form-control" multiple>
                    @foreach ($novels as $novel)
                        <option value="{{ $novel->id }}">{{ $novel->chapter }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-sm btn-outline-success">Add</button>
        </form>
        <a href="" onclick="window.history.back(-1); return false">Back</a>
    </div>

@endsection

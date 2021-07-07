@extends('layouts.app')

@section('title', 'Create Story Name')

@section('content')

    <div class="container">
        <h3 style="color: brown">Create Story Name</h3>
        <form action="{{ route('storyNames.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="">
                @if ($errors->any())
                    <p style="color: red">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">List Story</label>
                <select name="list_story_id" class="form-control" id="">
                    <option value="">List Story</option>
                    @foreach ($listStorys as $listStory)
                        <option value="{{ $listStory->id }}">{{ $listStory->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select class="select2 form-control" name="category_id[]" multiple="multiple">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

            </div>
            <button type="submit" class="btn btn-sm btn-outline-success">Add</button>
        </form>
        <a href="" onclick="window.history.back(-1); return false">Back</a>
    </div>

@endsection

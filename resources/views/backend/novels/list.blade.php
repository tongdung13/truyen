@extends('layouts.app')

@section('title', 'Novel')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-11">
                <h3 style="color: brown">Novel</h3>
            </div>
            <div class="col-1">
                <a href="{{ route('novels.create') }}" class="btn btn-sm btn-outline-primary">Add</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Chapter</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($novels as $key => $value)
                        <td>{{ ++$key }}</td>
                        <td>
                            <a href="{{ route('novels.detail', $value->id) }}">{{ $value->name }}</a>
                        </td>
                        <td>{{ $value->chapter }}</td>
                        <td>
                            <a href="{{ route('novels.edit', $value->id) }}"
                                class="btn btn-sm btn-outline-warning">Update</a>
                            <a href="{{ route('novels.destroy', $value->id) }}"
                                onclick="return confirm('Bạn có muốn xóa không?')"
                                class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $novels->links('pagination::bootstrap-4') }}
        </div>
    </div>


@endsection

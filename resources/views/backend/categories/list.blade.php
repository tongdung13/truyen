@extends('layouts.app')

@section('title', 'Category')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-11">
                <h3 style="color: brown">Category</h3>
            </div>
            <div class="col-1">
                <a href="{{ route('categories.create') }}" class="btn btn-sm btn-outline-primary">Add</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key => $value)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $value->name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $value->id) }}"
                                class="btn btn-sm btn-outline-warning">Update</a>
                            <a href="{{ route('categories.destroy', $value->id) }}"
                                onclick="return confirm('Bạn có muốn xóa không?')"
                                class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $categories->links('pagination::bootstrap-4') }}
        </div>
    </div>


@endsection

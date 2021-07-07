@extends('layouts.app')

@section('title', 'List Story')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-11">
                <h3 style="color: brown">List Story</h3>
            </div>
            <div class="col-1">
                <a href="{{ route('listStorys.create') }}" class="btn btn-sm btn-outline-primary">Add</a>
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
                @foreach ($listStorys as $key => $value)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $value->name }}</td>
                        <td>
                            <a href="{{ route('listStorys.edit', $value->id) }}"
                                class="btn btn-sm btn-outline-warning">Update</a>
                            <a href="{{ route('listStorys.destroy', $value->id) }}"
                                onclick="return confirm('Bạn có muốn xóa không?')"
                                class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $listStorys->links('pagination::bootstrap-4') }}
        </div>
    </div>


@endsection

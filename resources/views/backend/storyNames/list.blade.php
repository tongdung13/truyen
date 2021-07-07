@extends('layouts.app')

@section('title', 'Story Name')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-11">
                <h3 style="color: brown">Story Name</h3>
            </div>
            <div class="col-1">
                <a href="{{ route('storyNames.create') }}" class="btn btn-sm btn-outline-primary">Add</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($storyNames as $key => $value)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>
                            <a href="{{ route('storyNames.detail', $value->id) }}">{{ $value->name }}</a>
                        </td>
                        <td>
                            @php
                                $arr_cate = [];
                                $category = $value
                                    ::find($value->id)
                                    ->categories()
                                    ->get();
                                foreach ($category as $item) {
                                    $arr_cate[] = $item->name;
                                }
                                echo implode('<br/>', $arr_cate);
                            @endphp
                        </td>
                        <td>
                            <a href="{{ route('storyNames.edit', $value->id) }}"
                                class="btn btn-sm btn-outline-warning">Update</a>
                            <a href="{{ route('storyNames.destroy', $value->id) }}"
                                onclick="return confirm('Bạn có muốn xóa không?')"
                                class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $storyNames->links('pagination::bootstrap-4') }}
        </div>
    </div>


@endsection

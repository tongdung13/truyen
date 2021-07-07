@extends('layouts.app')

@section('title', 'Detail Story Name')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-10">
                <h3 style="margin-left: 43%; color: blue">{{ $storyNames->name }}</h3>
                <h4>Thể loại :</h4>
                <b>@php
                    $arr_cate = [];
                    $category = $storyNames
                        ::find($storyNames->id)
                        ->categories()
                        ->get();
                    foreach ($category as $item) {
                        $arr_cate[] = $item->name;
                    }
                    echo implode('<br/>', $arr_cate);
                @endphp
                </b>
            </div>
            <div class="col-2">
                <a href="{{ route('storyNovels.create', $storyNames->id) }}"
                   style="margin-left: 40px" class="btn btn-sm btn-outline-primary">Thêm chương</a>
            </div>
        </div>

        <hr>
        @if (!empty($storyNovels))
            <div class="row">
                <div class="col-11">
                    <h3 style="color: brown">Danh sách chương</h3>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Chapter</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($storyNovels as $key => $value)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $value->novel->chapter }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

    </div>

@endsection

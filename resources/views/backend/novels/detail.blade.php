@extends('layouts.app')

@section('title', 'Detail Novel')

@section('content')

    <div class="container">
        <h3 style="margin-left: 43%; color: blue">{{ $novels->name }}</h3>
        <b style="color: black; font-size: 25px">{!! $novels->content !!}</b>
    </div>

@endsection

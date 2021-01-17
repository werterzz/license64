@extends('layouts.header')

@section('title', $data['name'] )

@section('content')
    <div class="tabTwoImageCard">
        @foreach ($data['file'] as $file)
            <img src="/storage/images/{{ $file }}">
        @endforeach
    </div>
    <style>
        .tabTwoImageCard {
            margin: auto;
            margin-top: 10%;
            width: 60%;
        }

        .tabTwoImageCard img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10%;
        }
    </style>
@endsection
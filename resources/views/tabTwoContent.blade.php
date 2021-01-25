@extends('layouts.header')

@section('title', $data['name'] )

@section('content')
<div class="space"></div>
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

        .space {
            width: 100%;
            height: 5vh;
        }
        @media (max-width: 575.98px) {
            .tabTwoImageCard {
                width: 95%;
            }
        }
        
    </style>
@endsection
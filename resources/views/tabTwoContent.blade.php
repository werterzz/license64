@extends('layouts.header')

@section('title', $data['name'] )

@section('content')
<!-- <div class="space"></div> -->
    <div class="tabTwoImageCard">
        @foreach ($data['file'] as $file)
            <img src="{{ asset('storage/images/' . $file) }}">
        @endforeach
    </div>
    <x-bottom-banner />
    <script src="{{ asset('js/navInContent.js') }}"></script>
    <style>
        .tabTwoImageCard {
            margin: auto;
            margin-top: 2%;
            width: 60%;
        }

        .tabTwoImageCard img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10%;
        }

        .space {
            width: 100%;
            height: 10vh;
        }
        @media (max-width: 575.98px) {
            .tabTwoImageCard {
                width: 95%;
            }
        }
        
    </style>
@endsection
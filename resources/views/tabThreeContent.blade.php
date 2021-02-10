@extends('layouts.header')

@section('title', $name )

@section('content')
    <div class="tabThreeImageCard row">
        @foreach ($videos as $video)
        <div class="col-md-3">
        <a href='https://www.youtube.com/watch?v={{ $video["snippet"]["resourceId"]["videoId"] }}'>
            <div>
                <img src="{{ $video['snippet']['thumbnails']['high']['url'] }}" >
                <h6>{{ $video["snippet"]["title"] }}</h6>       
            </div>        
        </a>
        </div>


          
        @endforeach
    </div>
    <x-bottom-banner />
    <script src="{{ asset('js/navInContent.js') }}"></script>
    <style>
        .tabThreeImageCard {
            margin: auto;
            width: 60%;
        }

        .tabThreeImageCard div div {
            margin-top: 5vh;
            text-align: center;
            background-color: rgba(255,255,255,0.1);
            border-radius: 5px;
            min-height: 35vh;
        }

        .tabThreeImageCard div div img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 5%;
        }

        .tabThreeImageCard div div h6 {
            color: #fff;
            padding-bottom: 3vh;
            width: 80%;
            margin: 0 auto;
        }

        .tabThreeImageCard a {
            color: #fff;
            text-decoration: none;
        }

        @media (max-width: 575.98px) {
            .tabThreeImageCard {
                /* margin-top: 10vh; */
                margin-top: -7%;
                width: 90%;
            }
        }
        
    </style>
@endsection
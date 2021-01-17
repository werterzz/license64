@extends('layouts.header')

@section('title', $name )

@section('content')
    <div class="tabThreeImageCard">
        @foreach ($videos as $video)
        <a href='https://www.youtube.com/watch?v={{ $video["snippet"]["resourceId"]["videoId"] }}'>
            <div>
                <img src="{{ $video['snippet']['thumbnails']['high']['url'] }}" >
                <h6>{{ $video["snippet"]["title"] }}</h6>       
            </div>        
        </a>

          
        @endforeach
    </div>
    <style>
        .tabThreeImageCard {
            margin: auto;
            margin-top: 10%;
            width: 60%;
        }

        .tabThreeImageCard div {
            margin-top: 5%;
            text-align: center;
            background-color: rgba(255,255,255,0.1);
            border-radius: 5px;
        }

        .tabThreeImageCard div img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 5%;
        }

        .tabThreeImageCard div h6 {
            color: #fff;
            padding-bottom: 3vh;
            width: 80%;
            margin: 0 auto;
        }

        .tabThreeImageCard a {
            color: #fff;
            text-decoration: none;
        }
        
    </style>
@endsection
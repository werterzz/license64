<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tab3Controller extends Controller
{
    public function index()
    {
        return view('tabThreeContent');
    }
    
    public function show(Request $request)
    {
        $name = $request->name;
        $listId = $request->listId;
        $apiKey = "AIzaSyBZX3L-FXBCyrWZ1BObYQNh1KsSun2wwdc";

        $url = "https://www.googleapis.com/youtube/v3/playlistItems?key=" . $apiKey . '&playlistId=' . $listId . '&part=snippet,id&maxResults=70';
        $json = file_get_contents($url);
        $json_data = json_decode($json, true);
        $videos = $json_data["items"];
        // dd($videos[0]["snippet"]["resourceId"]["videoId"]);
        return view('tabThreeContent', compact('videos', 'name'));

    }
}

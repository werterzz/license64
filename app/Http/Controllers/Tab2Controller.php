<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tab2Controller extends Controller
{
    public function index()
    {
        return view('tabTwoContent');
    }
    
    public function show(Request $request)
    {
        $name = $request->name;
        $path = base_path().'/public/data/document.json';
        $content = json_decode(file_get_contents($path), true);
        foreach ($content as $data) {
            if ($name == $data['name'])
            {
                return view('tabTwoContent', compact('data'));
            }
        }
    }
}

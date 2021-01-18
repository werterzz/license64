<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tab1Controller extends Controller
{


    public function show(Request $request)
    {
        $id = $request->id;
        $answer = $request->answer;
        $isAnswer = 0;

        $path = base_path().'/public/data/exam.json';
        $content = json_decode(file_get_contents($path), true);

        if ($id >= 0)
        {
            $exam = $content[$id];

            shuffle($exam["exam"]);

            if (count($exam["exam"]) > 30) 
            {
                $exam["exam"] = array_slice($exam["exam"], 0, 30);
            }            
        }
        else 
        {
            $exam = [];
            for($i=0; $i < count($content); $i++){
                $exam = array_merge($exam, $content[$i]);
              }
            shuffle($exam["exam"]);
            $exam["exam"] = array_slice($exam["exam"], 0, 50);
        }

        // dd($exam["exam"]);
        return view('tabOneContent', compact('exam', 'isAnswer'));
        
    }

    public function submit(Request $request)
    {
        
        $exam = json_decode($_POST["exam"], true);
        $totalScore = count($exam["exam"]);
        $isAnswer = true;
        $resultTxt = "";
        $icon = "";

        $score = 0;
        foreach ($_POST as $index=>$value)
        {
            if ($index != "_token")
            {
                $check = explode(" ", $value);
                if ($check[0] == $check[1])
                {
                    $score++;
                }
            }
        }

        if ($score > 28)
        {
            $resultTxt = "คุณสอบใบขับขี่ผ่านแน่ๆ ";
            $icon = "happy-outline"; 
        }
        else if ($score > 25)
        {
            $resultTxt = "พยามอีกนิดเกือบผ่านแล้วนะ";
            $icon = "happy-outline"; 
        }
        else
        {
            $resultTxt = "คุณต้องพยายามให้มากกว่านี้";
            $icon = "sad-outline"; 
        }

        // dd($_POST, $score );
        return view('tabOneContent', compact('exam', 'isAnswer', 'score', 'totalScore', 'resultTxt', 'icon'));

        
    }
}

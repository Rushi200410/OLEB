<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class QuizController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function new_start()
    {
        return view('game/levels');
    }

    public function video()
    {
        // $user = Auth::user();

        // $videoFilename = $user->timeline . ".mp4"; // Assuming video filenames are stored as 'timeline_value.mp4'

        // $videoPath = asset('videos/' . $videoFilename);

        $videoPath = asset('videos/olabs1.mp4');

        return view('game/video', compact('videoPath'));
    }

    public function quiz()
        {
            return view('game/quiz');
    }
}

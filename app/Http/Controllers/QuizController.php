<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Quiz;
use App\Models\Student;
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

    public function new_start(Request $request)
    {
        $userid = Session::get('user_id');

        // Check if a student with this user_id already exists
        $student = Student::where('user_id', $userid)->first();

        if ($student) {
            // If the student exists, update the score and timeline to 0
            $student->score = 0;
            $student->timeline = 0;
            $student->save();
        } else {
            // If no student exists, create a new record
            $student = new Student();
            $student->user_id = $userid;
            $student->score = 0;
            $student->timeline = 0;
            $student->save();
        }

        // Store the student ID in the session (it will overwrite if already exists)
        Session::put('student_id', $student->id);

        return view('game.levels', ['student' => $student]);
    }


    public function video()
    {
        // dd(Session()->all());
        $student = Student::where('id', Session::get('student_id'))->first();
        $timeline = $student->timeline + 1;
        $student->timeline = $timeline;
        $student->save();

        $event = Event::where('id', $timeline)->first();
        $video = $event->video_name. ".mp4";

        $videoPath = asset('videos/'. $video);

        return view('game/video', compact('videoPath'));
    }

    public function quiz()
        {
            return view('game/quiz');
    }
}

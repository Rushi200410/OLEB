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
            $student->timeline = 1;
            $student->save();
        } else {
            // If no student exists, create a new record
            $student = new Student();
            $student->user_id = $userid;
            $student->score = 0;
            $student->timeline = 1;
            $student->save();
        }

        // Store the student ID in the session (it will overwrite if already exists)
        Session::put('student_id', $student->id);
        Session::put('student_score', $student->score);

        return view('game.levels', ['student' => $student]);
    }

    public function continue()
    {
        // if($event->points_required <= Session::get('student_score'))
        // {

        // }
        // else
        // {
        //     echo "<h3>Your Score Is Not Enough To Continue</h3>";
        //     echo "<h1>Please Restart</h1>";
        //     echo "<a><button href=''> Restart </button></a>";
        // }

    }

    public function video()
    {
        // dd(Session()->all());
        $student = Student::where('id', Session::get('student_id'))->first();
        $timeline = $student->timeline;
        $event = Event::where('timeline', $timeline)->first();

        $student->timeline = $timeline;
        $student->save();

// echo "<pre>";
// print_r($event);
// echo "</pre>";
// die();
        $video = $event->video_name. ".mp4";
        $videoPath = asset('videos/'. $video);

        return view('game/video', compact('videoPath'));

    }

public function quiz($question_no)
    {
        // dd(Session()->all());
        if($question_no > 5 || $question_no < 0)
        {
            echo "Don't alter the URL";
            die();
        }

        $student = Student::where('id', Session::get('student_id'))->first();

        $timeline = $student->timeline;

        $event = Event::where('timeline', $timeline)->first();
        $question_col = "q". $question_no ."_id";
        $question_id = $event->$question_col;

        $quiz_question = Quiz::where('id', $question_id)->first();
        $quiz_question -> question_no = $question_no;

        return view('game/quiz', compact('quiz_question'));
    }

    public function verify_quiz($question_no, $correct)
    {
        if($question_no > 5 || $question_no < 0 || $correct > 1 || $correct < 0)
        {
            echo "Don't alter the URL";
            die();
        }

        if($correct == 1)
        {
            $student = Student::where('id', Session::get('student_id'))->first();
            $timeline = $student->timeline;

            $event = Event::where('timeline', $timeline)->first();
            $question_col = "q". $question_no ."_id";
            $question_id = $event->$question_col;

            $quiz_question = Quiz::where('id', $question_id)->first();
            $student_score = Session::get('student_score') + $quiz_question->points;

            Session::put('student_score', $student_score);
        }
        if($question_no <= 4)
        {
            $question_no++;
            return redirect(route('game.quiz', ['question_no' => $question_no]));
        }
        else
        {
            // return redirect(route('continue', ['question_no' => $question_no]));
        }

    }
}

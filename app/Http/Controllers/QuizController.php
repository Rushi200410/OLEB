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

    public function home($dec_timeline = 0)
    {

        $continue = 0;
        if(Session::get('student_score'))
        {
            $continue = 0;
            $student = Student::where('id', Session::get('student_id'))->first();
            if($dec_timeline == 1)
            {
                $student->timeline = $student->timeline - 1;
                $student->save();
            }

            $event = Event::where('timeline', $student->timeline)->first();

            if($event->points_required <= Session::get('student_score'))
            {
                $continue = 1;
            }
        }



        return view('home', ['continue' => $continue]);
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

        $event = Event::where('timeline', $student->timeline)->first();

        // Store the student ID in the session (it will overwrite if already exists)
        Session::put('student_id', $student->id);
        Session::put('student_score', $student->score);
        Session::put('student_timeline', $student->timeline);

        return view('game.levels', ['char_name' => $event->char_name, 'side_char_name' => $event->side_char_name, 'bg_name' => $event->bg_name]);
    }

    public function continue()
    {

        $student = Student::where('id', Session::get('student_id'))->first();
        $event = Event::where('timeline', $student->timeline)->first();

        if($event->points_required <= Session::get('student_score'))
        {

            // Check if a student with this user_id already exists
            $student = Student::where('user_id', Session::get('user_id'))->first();

            if ($student) {
                // If the student exists, update the score and timeline to 0
                $student->timeline = $student->timeline + 1;
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
            Session::put('student_timeline', $student->timeline);

            // return view('game.levels', ['student' => $student]);
            return view('game.levels', ['char_name' => $event->char_name, 'side_char_name' => $event->side_char_name, 'bg_name' => $event->bg_name]);
        }
        else
        {
            return view('restart', ['char_name' => $event->char_name]); // Create a restart.blade.php view file
        }

    }

    public function video()
    {
    // dd(Session()->all());
        $event = Event::where('timeline', Session::get('student_timeline'))->first();
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
        if($question_no > 7 || $question_no < 0)
        {
            echo "Don't alter the URL";
            die();
        }

        $event = Event::where('timeline', Session::get('student_timeline'))->first();
        $question_col = "q". $question_no ."_id";
        $question_id = $event->$question_col;

        $quiz_question = Quiz::where('id', $question_id)->first();
        $quiz_question -> question_no = $question_no;
        $quiz_question -> char_name = $event->char_name;
        $quiz_question -> bg_name = $event->bg_name;

// echo "<pre>";
// print_r($timeline);
// echo "</pre>";
// die();

        return view('game/quiz', compact('quiz_question'));
    }

    public function verify_quiz($question_no, $correct)
    {
        if($question_no > 7 || $question_no < 0 || $correct > 1 || $correct < 0)
        {
            echo "Don't alter the URL";
            die();
        }

        if($correct == 1)
        {
            $student = Student::where('id', Session::get('student_id'))->first();
            $timeline = $student->timeline;


            $event = Event::where('timeline', Session::get('student_timeline'))->first();
            $question_col = "q". $question_no ."_id";
            $question_id = $event->$question_col;

            $quiz_question = Quiz::where('id', $question_id)->first();
            $student_score = Session::get('student_score') + $quiz_question->points;

            Session::put('student_score', $student_score);
        }
        else
        {
            $student_score = Session::get('student_score') - 1;

            Session::put('student_score', $student_score);
        }

        if($question_no < 7)
        {

            $question_no++;
            return redirect(route('game.quiz', ['question_no' => $question_no]));
        }
        else
        {
            return redirect(route('game.rest'));
        }
    }

    public function rest(Request $request)
    {
        $student_score = Session::get('student_score');
        $student = Student::find(Session::get('student_id'));
// echo "<pre>";
// print_r($student_score);
// echo "</pre>";
// die();

        $student->score = $student_score;
        $student->save();

        $event = Event::where('timeline', $student->timeline)->first();


        return view('game.rest', ['score' => $student_score, 'char_name' => $event->char_name, 'bg_name' => $event->bg_name]);
    }

}

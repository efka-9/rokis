<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Src\Quiz;
use App\Src\Question;

class BaseController extends Controller
{
    public function getIndex(Quiz $quiz)
    {
        return view('index', [
            'quizes' => $quiz::all()
        ]);
    }

    public function getQuestion($question_id)
    {
        return view('question', [
            'question' => Question::find($question_id)
        ]);
    }

    public function postNext(Request $req)
    {
        $answer = json_decode($req->input('answer'));
        $question = json_decode($req->input('question'));

        //vat taip susirandam koks sekantis klausimas
        $next_question = Question::where('quiz_id', '=', $question->quiz_id)
            ->where('id', '>', $question->id)
            ->orderBy('id', 'asc')
            ->first()
        ;

        //pridedam taskus
        with(new Quiz)->addPoints($question->quiz_id, $answer->points);

        //darysim redirekta i sekanti klausima
        if ($next_question) {
            return redirect()->route('question', ['question_id' => $next_question->id]);
        }

        //jei nebera klausimu parodom rezultata
        return redirect()->route('output', ['quiz_id' => $question->quiz_id]);
    }

    public function getOutput(Request $req, $quiz_id)
    {
        //paziurim kiek surinko tasku
        $points = session("quiz_{$quiz_id}");

        //istrinam is sesijos taskus kad neuzsiliktu ant kito quizo
        $req->session()->forget("quiz_{$quiz_id}");

        return view('output', [
            'points' => $points
        ]);
    }
}

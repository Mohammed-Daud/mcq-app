<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\McqTestResult;
use Illuminate\Support\Facades\DB;

class McqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('mcq');
    }

    public function getQuestion($question_no){
        session(['question_no'  => $question_no]);
        return config('mcq')[$question_no-1];
    }

    public function markSkip(){

        $result = $this->getResultOfUser();

        $newResult = McqTestResult::find($result->id);
        $newResult->skip_answer = $result->skip_answer + 1;
        $newResult->save();

    }

    public function saveAnswer(Request $request){

        $ans        = $request->input('ans');
        $question_no = session('question_no');

        if(!$question_no || !$ans){
            throw new Exception('Data Missing');
        }

        $result = $this->getResultOfUser();

        $newResult = McqTestResult::find($result->id);
        if($ans == config('mcq')[$question_no-1]['correct_answer']){
            $newResult->correct_answer  = $result->correct_answer + 1;
        } else {
            $newResult->wrong_answer    = $result->wrong_answer + 1;
        }
        $newResult->save();

    }

    public function showResult(){
        session(['test_done'  => true]);
        return McqTestResult::where([
            'user_id' => auth()->user()->id
        ])->first();
    }

    private function getResultOfUser(){

        $result = McqTestResult::where([
            'user_id' => auth()->user()->id
        ])->first();

        if(!$result){

            $result = new McqTestResult;
            $result->user_id = auth()->user()->id;
            $result->save();

        }

        return $result;

    }
    
}


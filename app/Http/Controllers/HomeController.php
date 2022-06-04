<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StartRequest;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    public function start()
    {
        return view('start');
    }

    public function createUser(StartRequest $request){
        
        $user = User::firstOrCreate(
            ['name' => $request->get('name')],
            ['email' => Str::random(8).'@'.Str::random(8).'.com','password' =>bcrypt(Str::random(40))]
        );
        $total_attempted = DB::select('select (correct_answer+wrong_answer+skip_answer) as total_attempted from mcq_test_results where user_id =' . $user->id);

        
        if($total_attempted){
            $total_attempted = $total_attempted[0]->total_attempted;
            if($total_attempted >= config('app.max_questions')){
                session(['test_done'  => true]);
            }
            session(['question_no'  => $total_attempted + 1]);
        }

        Auth::login($user);

        return redirect()->to('mcq');
        
    }

}

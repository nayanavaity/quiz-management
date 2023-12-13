<?php

namespace App\Http\Controllers\Backend;

use App\Option;
use App\Question;
use App\UserQuestionAnswer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    
    public function index()
    {
        $questionAnswers = UserQuestionAnswer::with('questions.options')
                                    ->paginate(15);
        $data = [];     

        foreach($questionAnswers as $questions) {

        }

        return view('backend.index', ['questionAnswers' => $questionAnswers]);
    }
}

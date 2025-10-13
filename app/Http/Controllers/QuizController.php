<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {   
        
        $quizData = include base_path('resources/utils/quiz.php');

        return view('home.home', [
            'quizData' => $quizData,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showViewAnalyticalStudent() 
    {
        return view('estudante.mainAnalytical');
    }

    public function showViewAnalyticalStudentByArea() 
    {
        return view('estudante.analyticalByArea');
    }

    public function showViewAnalyticalStudentByDisciplina() 
    {
        return view('estudante.analyticalByDisciplina');
    }

    public function showViewAnalyticalTurmas() 
    {
        return view('professor.analyticalByTurmas');
    }

    public function showViewAnalyticalTurma01() 
    {
        return view('professor.analyticalByTurma01');
    }

    public function showViewAnalyticalMetrica() 
    {
        return view('professor.analyticalByMetrica');
    }

    public function showViewAnalyticalAvaliacaoMetrica() 
    {
        return view('professor.analyticalByAvaliacaoMetrica');
    }
}

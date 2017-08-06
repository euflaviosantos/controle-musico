<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

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
        $dados = [
            'eventos'=> Evento::proximos(4),
        ];
        return view('admin.index', $dados);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Auth;


class VideoController extends ResourceController
{
    protected function model(){
        return new \App\Video;
    }

    public function index(){
        $dados = array(
            'videos'=>Video::where('user_id','=',Auth::id())->paginate(10),
        );

        return view('admin.videos.index', $dados);
    }
}

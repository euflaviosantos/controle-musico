<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class VideoController extends ResourceController
{
    protected function model(){
        return new \App\Video;
    }
}

<?php

namespace MONDO_PIECE\Http\Controllers;

use Illuminate\Http\Request;

class MusicsController extends Controller
{
    public function new()
    {
        return view('musics.new');
    }
}

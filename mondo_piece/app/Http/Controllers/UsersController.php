<?php

namespace MONDO_PIECE\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function mypage()
    {
        return view('mypage');
    }
}

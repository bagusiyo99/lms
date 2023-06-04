<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaTeacherController extends Controller
{
    public function index ()
    {
        return view('teacher.beranda_index');

    }
}

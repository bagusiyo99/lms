<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaStudentController extends Controller
{
    public function index ()
    {
        return view('student.beranda_index');

    }
}

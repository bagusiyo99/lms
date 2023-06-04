<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaAdminController extends Controller
{
    public function index ()
    {
        return view('admin.beranda_index');

    }
}

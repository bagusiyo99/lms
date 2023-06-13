<?php

namespace App\Http\Controllers;

use App\Models\Kelasujian;
use Illuminate\Http\Request;

class KelasujianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.kelasujian_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelasujian  $kelasujian
     * @return \Illuminate\Http\Response
     */
    public function show(Kelasujian $kelasujian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelasujian  $kelasujian
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelasujian $kelasujian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelasujian  $kelasujian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelasujian $kelasujian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelasujian  $kelasujian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelasujian $kelasujian)
    {
        //
    }
}

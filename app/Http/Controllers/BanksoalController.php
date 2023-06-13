<?php

namespace App\Http\Controllers;

use App\Models\Banksoal;
use Illuminate\Http\Request;

class BanksoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.banksoal_index');
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
     * @param  \App\Models\Banksoal  $banksoal
     * @return \Illuminate\Http\Response
     */
    public function show(Banksoal $banksoal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banksoal  $banksoal
     * @return \Illuminate\Http\Response
     */
    public function edit(Banksoal $banksoal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banksoal  $banksoal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banksoal $banksoal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banksoal  $banksoal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banksoal $banksoal)
    {
        //
    }
}

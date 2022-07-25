<?php

namespace App\Http\Controllers;

use App\Models\RegisterDoc;
use App\Http\Requests\StoreRegisterDocRequest;
use App\Http\Requests\UpdateRegisterDocRequest;

class RegisterDocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreRegisterDocRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegisterDocRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegisterDoc  $RegisterDoc
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterDoc $RegisterDoc)
    {
        //
        // dd($RegisterDoc);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegisterDoc  $registerDoc
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterDoc $registerDoc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegisterDocRequest  $request
     * @param  \App\Models\RegisterDoc  $RegisterDoc
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegisterDocRequest $request, RegisterDoc $RegisterDoc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegisterDoc  $RegisterDoc
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterDoc $RegisterDoc)
    {
        //
    }

}

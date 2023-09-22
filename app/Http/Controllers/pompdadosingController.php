<?php

namespace App\Http\Controllers;

use App\Models\pompadosing;
use App\Http\Requests\StorepompadosingRequest;
use App\Http\Requests\UpdatepompadosingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class pompdadosingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pompadosing::all();
        return view('mtc.mainpompadosing')->with(compact('data'))->with( ['user' => Auth::user()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepompadosingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pompadosing $pompadosing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pompadosing $pompadosing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepompadosingRequest $request, pompadosing $pompadosing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pompadosing $pompadosing)
    {
        //
    }
}

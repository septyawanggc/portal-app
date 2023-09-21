<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\pompaintake;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class pompaintakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pompaintake::all();
        return view('mtc.mainpompaintake')->with(compact('data'))->with( ['user' => Auth::user()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mtc.createpompaintake')->with( ['user' => Auth::user()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        pompaintake::create($data);
        Alert::success('Congrats', 'Data Inputed Succesfuly');
        return redirect('/pompaintake')->with( ['user' => Auth::user()]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = pompaintake::findOrFail($id);
        return view('mtc.showpompaintake')->with(compact('data'))->with( ['user' => Auth::user()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

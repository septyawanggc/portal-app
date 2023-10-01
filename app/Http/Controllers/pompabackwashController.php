<?php

namespace App\Http\Controllers;

use App\Models\pompabackwash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class pompabackwashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pompabackwash::all();
        return view('mtc.mainpompabw')->with(compact('data'))->with( ['user' => Auth::user()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mtc.createpompabw')->with( ['user' => Auth::user()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        pompabackwash::create($data);
        Alert::success('Congrats', 'Data Inputed Succesfuly');
        return redirect('/pompabw')->with( ['user' => Auth::user()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = pompabackwash::findOrFail($id);
        return view('mtc.showpompabw')->with(compact('data'))->with( ['user' => Auth::user()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pompabackwash $pompabackwash)
    {
        $data = pompabackwash::findOrFail($id);
        return view('mtc.editpompabw')->with(compact('data'))->with( ['user' => Auth::user()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pompabackwash $pompabackwash)
    {
        $data = pompabackwash::findOrFail($id);
        $data->update($request->all());
        Alert::success('Congrats', 'Data Edited Succesfuly');
        return redirect('/pompabw')->with( ['user' => Auth::user()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pompabackwash $pompabackwash)
    {
        $data = pompabackwash::findOrFail($id);
        $data->delete();
        Alert::success('Congrats', 'Data Deleted Succesfuly');
        return redirect('/pompaintake')->with( ['user' => Auth::user()]);
    }
}

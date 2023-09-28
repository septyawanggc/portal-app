<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LkModel;
use RealRashid\SweetAlert\Facades\Alert;

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $count = LkModel::count();
        $ok = LkModel::where('status','Completed')->count();
        $progres = LkModel::where('status','Onprogres')->count();
        $new = LkModel::where('status','Created')->count();
        $data = LkModel::orderBy('status','asc')->get();
        return view('mtc..laporan.mainlaporan')->with(compact('data'))->with(compact('new'))->with(compact('count'))->with(compact('ok'))->with(compact('progres'))->with( ['user' => Auth::user()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mtc.laporan.create-lk')->with( ['user' => Auth::user()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        LkModel::create($data);
        Alert::success('Congrats', 'Data Inputed Succesfuly');
        return redirect('/laporan')->with( ['user' => Auth::user()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = LkModel::findOrFail($id);
        return view('mtc.laporan.showlk')->with(compact('data'))->with( ['user' => Auth::user()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = LkModel::findOrFail($id);
        return view('mtc.laporan.editlk')->with(compact('data'))->with( ['user' => Auth::user()]);
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

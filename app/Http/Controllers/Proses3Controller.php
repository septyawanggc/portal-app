<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LkModel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class Proses3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = LkModel::findOrFail($id);
        return view('mtc.laporan.create-laporan4')->with(compact('data'))->with( ['user' => Auth::user()]);
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
        $data = LkModel::findOrFail($id);
        $usermtc = Auth::user();

        $data->departemen = $request->departemen;
        $data->dilakukan = $request->dilakukan;
        $data->tglsubrun = $request->tglsubrun;
        $data->tglsubend = $request->tglsubend;
        $data->countsub = $request->countsub;
        $data->eksekutor = $request->eksekutor;
        $data->tahap = $request->tahap;
        $data->eksekusiday = $request->eksekusiday;
        $data->starkerja = $request->starkerja;
        $data->endkerja = $request->endkerja;
        $data->manhour = $request->manhour;
        $data->hasil = $request->hasil;
        $data->cegah = $request->cegah;
        $data->material = $request->material;
        $data->status = ('Onprogres');
        $data->usermtc = $usermtc;
        
        $data->update();

        return redirect('/laporan')->with('success', 'Telah Diproses Oleh Maintenance')->with( ['user' => Auth::user()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

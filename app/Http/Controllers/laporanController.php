<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LkModel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
        return view('mtc.laporan.create-laporan1')->with( ['user' => Auth::user()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $image_parts1 = explode(";base64,", $request->signed1);
        $image_type_aux1 = explode("image/", $image_parts1[0]);
        $image_type1 = $image_type_aux1[1];
        $image_base64_1 = base64_decode($image_parts1[1]);
        $filename = uniqid() . '.'.$image_type1;
        Storage::disk('images')->put($filename,$image_base64_1);
       
        $LK = new LkModel;
        $LK->nolk = $request->nolk;
        $LK->nama = $request->nama;
        $LK->alat = $request->alat;
        $LK->tanggal = $request->tanggal;
        $LK->day = $request->day;
        $LK->pid = $request->pid;
        $LK->bangunan = $request->bangunan;
        $LK->analisa = $request->analisa;
        $LK->kerusakan = $request->kerusakan;
        $LK->action = $request->action;
        $LK->operator = ('/storage/images/'.$filename);

        $LK->save();
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
        $data = LkModel::findOrFail($id);
        $data->update($request->all());
        Alert::success('Congrats', 'Data Edited Succesfuly');
        return redirect('/laporan')->with( ['user' => Auth::user()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

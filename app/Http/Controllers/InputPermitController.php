<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Models\InputPermitModel;
use sirajcse\UniqueIdGenerator\UniqueIdGenerator;

class InputPermitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = InputPermitModel::all();
        $new = InputPermitModel::where('status','Created')->count();
        $aprove = InputPermitModel::where('status','Aproved')->count();
        return view('scm.permit.mainpermit')->with(compact('data','new','aprove'))->with( ['user' => Auth::user()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('scm.permit.createpermit')->with( ['user' => Auth::user()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $image_parts1 = explode(";base64,", $request->signeduser);
        $image_type_aux1 = explode("image/", $image_parts1[0]);
        $image_type1 = $image_type_aux1[1];
        $image_base64_1 = base64_decode($image_parts1[1]);
        $filename = uniqid() . '.'.$image_type1;
        Storage::disk('images')->put($filename,$image_base64_1);

        $userpelapor = Auth::user()->name;
        $uniqid = UniqueIdGenerator::generate(['table' => 'inputpermit','field'=>'nopermit', 'length' => 12,'prefix' =>'ASB-', 'suffix' =>date('/Y')]);

        $data = new InputPermitModel;
        $data->nopermit = $uniqid;
        $data->tanggal = $request->tanggal;
        $data->divisi = $request->divisi;
        $data->nama = $request->nama;
        $data->kode = $request->kode;
        $data->type = $request->type;
        $data->jumlah = $request->jumlah;
        $data->satuan = $request->satuan;
        $data->keperluan = $request->keperluan;
        $data->keterangan = $request->keterangan;
        $data->diajukan = ('/storage/images/'.$filename);
        $data->status = ('Created');
        $data->inputuser = $userpelapor;

        $data->save();

        return redirect('/inputpermit')->with('success','Data Berhasil Di Input')->with( ['user' => Auth::user()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = InputPermitModel::findOrFail($id);
        return view('scm.permit.showpermit')->with(compact('data'))->with( ['user' => Auth::user()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = InputPermitModel::findOrFail($id);
        return view('scm.permit.editpermit')->with(compact('data'))->with( ['user' => Auth::user()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = InputPermitModel::findOrFail($id);
        
        $image_parts1 = explode(";base64,", $request->signedscm);
        $image_type_aux1 = explode("image/", $image_parts1[0]);
        $image_type1 = $image_type_aux1[1];
        $image_base64_1 = base64_decode($image_parts1[1]);
        $filename = uniqid() . '.'.$image_type1;
        Storage::disk('images')->put($filename,$image_base64_1);

        $data->divisi = $request->divisi;
        $data->nama = $request->nama;
        $data->kode = $request->kode;
        $data->type = $request->type;
        $data->jumlah = $request->jumlah;
        $data->satuan = $request->satuan;
        $data->keperluan = $request->keperluan;
        $data->keterangan = $request->keterangan;
        $data->diperiksa = ('/storage/images/'.$filename);
        $data->status = ('Aproved');

        $data->update();

        return redirect('/inputpermit')->with('success','Data Berhasil Di Update')->with( ['user' => Auth::user()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

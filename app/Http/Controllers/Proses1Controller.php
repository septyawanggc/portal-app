<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LkModel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class Proses1Controller extends Controller
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
        return view('mtc.laporan.create-laporan2')->with(compact('data'))->with( ['user' => Auth::user()]);
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
        $data = LKModel::findOrFail($id);
        $userprod = Auth::user();
    
        $image_parts1 = explode(";base64,", $request->signedspv);
        $image_type_aux1 = explode("image/", $image_parts1[0]);
        $image_type1 = $image_type_aux1[1];
        $image_base64_1 = base64_decode($image_parts1[1]);
        $filename = uniqid() . '.'.$image_type1;
        Storage::disk('images')->put($filename,$image_base64_1);

        $data->statuslk = $request->statuslk;
        $data->spvprod = ('/storage/images/'.$filename);
        $data->status = ('ApprovalSPV');
        $data->userprod = $userprod;
        
        $data->update();
        return redirect('/laporan')->with('success', 'Approval SPV Berhasil')->with( ['user' => Auth::user()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

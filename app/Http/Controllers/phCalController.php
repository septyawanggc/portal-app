<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\FlareClient\View;
use App\Models\FormPHModel;
use App\Models\Listalat;


class phCalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = FormPHModel::all();
        return view('mtc.instrumen.ph.index')->with(compact('data'))->with( ['user' => Auth::user()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data1 = Listalat::all();
        return view('mtc.instrumen.ph.create')->with(compact('data1'))->with( ['user' => Auth::user()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $equipment = $request->Equipment;
        $idalat = Listalat::where('equipment', $equipment)->first()->kode;
        $input = new FormPHModel();
        $input->Kode = $idalat;
        $input->Equipment = $request->Equipment;
        $input->Range1 = $request->Range1;
        $input->Standar1 = $request->Standar1;
        $input->Hasil1 = $request->Hasil1;
        $input->Range2 = $request->Range2;
        $input->Standar2 = $request->Standar2;
        $input->Hasil2 = $request->Hasil2;
        $input->Tanggal = $request->Tanggal;
        $input->Keterangan = $request->Keterangan;
        $input->save();
        Alert::success('Congrats', 'Data Inputed Succesfuly');
        return redirect('/formph')->with( ['user' => Auth::user()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = FormPHModel::findOrFail($id);
        return view('mtc.instrumen.ph.show')->with(compact('data'))->with( ['user' => Auth::user()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = FormPHModel::findOrFail($id);
        return view('mtc.instrumen.ph.edit')->with(compact('data'))->with( ['user' => Auth::user()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = FormPHModel::findOrFail($id);
        $data->update($request->all());
        Alert::success('Congrats', 'Data Updated Succesfuly');
        return redirect('/formph')->with( ['user' => Auth::user()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = FormPHModel::findOrFail($id);
        $data->delete();
        Alert::success('Congrats', 'Data Deleted Succesfuly');
        return redirect('/formph')->with( ['user' => Auth::user()]);
    }

    public function Equipment()
    {
        $data = Listalat::where('equipment','LIKE','%'.request('q').'%')->get();

        return response()->json($data);
    }


}

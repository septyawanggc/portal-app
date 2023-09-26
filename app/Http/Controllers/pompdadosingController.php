<?php

namespace App\Http\Controllers;

use App\Models\pompadosing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

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
        return view('mtc.createpompadosing')->with( ['user' => Auth::user()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        pompadosing::create($data);
        Alert::success('Congrats', 'Data Inputed Succesfuly');
        return redirect('/pompadosing')->with( ['user' => Auth::user()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = pompadosing::findOrFail($id);
        return view('mtc.showpompadosing')->with(compact('data'))->with( ['user' => Auth::user()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id )
    {
        $data = pompadosing::findOrFail($id);
        return view('mtc.editpompadosing')->with(compact('data'))->with( ['user' => Auth::user()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = pompadosing::findOrFail($id);
        $data->update($request->all());
        Alert::success('Congrats', 'Data Edited Succesfuly');
        return redirect('/pompadosing')->with( ['user' => Auth::user()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = pompadosing::findOrFail($id);
        $data->delete();
        Alert::success('Congrats', 'Data Deleted Succesfuly');
        return redirect('/pompadosing')->with( ['user' => Auth::user()]);
    }

    public function exportToExcel($id)
    {
        $data = pompadosing::findOrFail($id);
        $templatePath = storage_path('app/pompadosing.xlsx');
        $outputPath = storage_path('app/export_pompadosing.xlsx');
        copy($templatePath, $outputPath);
        $spreadsheet = IOFactory::load($outputPath);
        // Isi data dari aplikasi Anda ke dalam template
        $worksheet = $spreadsheet->getActiveSheet();
        $row = 4; // Mulai dari baris kedua untuk mengisi data
            foreach ($data as $item) {
                $worksheet->setCellValue('C' . $row, $item->Tanggal);
            }
        $row = 7; // Mulai dari baris kedua untuk mengisi data
            foreach ($data as $item) {
                $worksheet->setCellValue('B' . $row, $item->Nama);
                $worksheet->setCellValue('E' . $row, $item->Temp);
            }
        // Simpan perubahan
        $writer = new Xlsx($spreadsheet);
        $writer->save($outputPath);
    
        // Download file yang telah dibuat
     return response()->download($outputPath, 'export_pompadosing.xlsx');
    }
}

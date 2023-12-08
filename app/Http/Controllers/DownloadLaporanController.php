<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LkModel;
use RealRashid\SweetAlert\Facades\Alert;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Mpdf\Mpdf;
class DownloadLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = LkModel::where('status','Completed')->get();

        return view('mtc.laporan.download')->with(compact('data'))->with( ['user' => Auth::user()]);
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
        //
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

    public function savelaporan(string $id)
    {
        $data = LKModel::where('id',$id)->get();
        $templatePath = storage_path('app/laporankerusakan.xlsx');
        $outputPath = storage_path('app/public/doc/download/save_laporankerusakan.xlsx');
        copy($templatePath, $outputPath);
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($outputPath);
        // Isi data dari aplikasi Anda ke dalam template
        $worksheet = $spreadsheet->getActiveSheet();
            foreach ($data as $item) {
                $worksheet
                ->setCellValue('B6', $item->nolk)
                ->setCellValue('G6', $item->tanggal)
                ->setCellValue('B7', $item->nama)
                ->setCellValue('G7', $item->day)
                ->setCellValue('A8', $item->bangunan)
                ->setCellValue('G8', $item->alat)
                ->setCellValue('G9', $item->pid)
                ->setCellValue('A11', $item->kerusakan)
                ->setCellValue('F11', $item->analisa)
                ->setCellValue('A15', $item->action)
                ->setCellValue('D17', $item->statuslk)
                ->setCellValue('A22', $item->urgensi)
                ->setCellValue('D23', $item->catatan)
                ->setCellValue('A26', $item->departemen)
                ->setCellValue('A28', $item->dilakukan)
                ->setCellValue('E32', $item->tglsubrun)
                ->setCellValue('G32', $item->tglsubend)
                ->setCellValue('J32', $item->countsub)
                ->setCellValue('D33', ':'.$item->manhour)
                ->setCellValue('A36', $item->eksekutor)
                ->setCellValue('B36', $item->tahap)
                ->setCellValue('E36', $item->eksekusiday)
                ->setCellValue('F36', $item->starkerja)
                ->setCellValue('G36', $item->endkerja)
                ->setCellValue('H36', $item->manhour)
                ->setCellValue('B44', $item->hasil)
                ->setCellValue('E44', $item->cegah)
                ->setCellValue('F46', $item->material)
                ->setCellValue('A53', $item->usermtc)
                ->setCellValue('C54', $item->spvmtc);
            }
        //styling cell
        $spreadsheet->getActiveSheet()->getStyle('D17')->getAlignment()->setWrapText(true);
        $spreadsheet->getActiveSheet()->getStyle('D17')->getFont()->setSize(14)->setBold(true);
        $spreadsheet->getActiveSheet()->getPageSetup()->setPrintArea('A1:K59');
        $spreadsheet->getActiveSheet()->getPageSetup()->setFitToWidth(1);
        $spreadsheet->getActiveSheet()->getPageSetup()->setFitToHeight(0);
        //ttdoperator
        $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $drawing->setWorksheet($spreadsheet->getActiveSheet());
        $drawing->setPath(public_path($item->operator));
        $drawing->setCoordinates('A17');
        $drawing->setHeight(90);
        $drawing->setWidth(90);
        //ttdspv
        $prod = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $prod->setWorksheet($spreadsheet->getActiveSheet());
        $prod->setPath(public_path($item->spvprod));
        $prod->setCoordinates('B18');
        $prod->setHeight(90);
        $prod->setWidth(90);
        //ttdmgr
        $mgr = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $mgr->setWorksheet($spreadsheet->getActiveSheet());
        $mgr->setPath(public_path($item->manager));
        $mgr->setCoordinates('H22');
        $mgr->setHeight(90);
        $mgr->setWidth(90);
        //ttdspvmtc
        $mtc = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $mtc->setWorksheet($spreadsheet->getActiveSheet());
        $mtc->setPath(public_path($item->spvmtc));
        $mtc->setCoordinates('H26');
        $mtc->setHeight(90);
        $mtc->setWidth(90);
        //ttdfinalmtc
        $spvmtc = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $spvmtc->setWorksheet($spreadsheet->getActiveSheet());
        $spvmtc->setPath(public_path($item->spvmtc));
        $spvmtc->setCoordinates('C54');
        $spvmtc->setHeight(90);
        $spvmtc->setWidth(90);
        // Simpan perubahan
        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save($outputPath);

        // Download file yang telah dibuat
     return response()->download($outputPath, $item->tanggal.'-save_laporankerusakan.xlsx');
    }
}

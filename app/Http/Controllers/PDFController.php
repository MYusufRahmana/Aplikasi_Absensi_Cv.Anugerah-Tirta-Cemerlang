<?php

namespace App\Http\Controllers;

use App\Models\pelatih;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function index () {
        $pelatih = pelatih::all();
        return view('laporanpelatih.index',[
            'pelatih'=>$pelatih
        ]);
    }

    public function cetak_pdf()
    {
    	$pelatih = pelatih::all();
 
    	$pdf = Pdf::loadview('laporanpelatih.pdf',['pelatih'=>$pelatih]);
    	return $pdf->download('Laporan-Pelatih-pdf');
    }
}

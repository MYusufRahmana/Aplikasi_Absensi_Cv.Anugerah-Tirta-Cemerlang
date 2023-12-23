<?php

namespace App\Http\Controllers;

use App\Models\absensi_member;
use App\Models\absensi_pelatih;
use App\Models\pelatih;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function index () {
        $pelatih = pelatih::all();
        $id = absensi_pelatih::get('id_user');
        $totalGaji = [];
        foreach ($id as $item) {
            $id_user= $item->id_user;
            $hadirKelas1 = absensi_pelatih::where('id_user',$id_user)->where('status','Hadir')->where('kelas','1')->get()->count();
            $hadirKelas2 = absensi_pelatih::where('id_user',$id_user)->where('status','Hadir')->where('kelas','2')->get()->count();
            $hadirKelas3 = absensi_pelatih::where('id_user',$id_user)->where('status','Hadir')->where('kelas','3')->get()->count();
            $hadirKelas4 = absensi_pelatih::where('id_user',$id_user)->where('status','Hadir')->where('kelas','4')->get()->count();
            $totalGaji[$id_user]=$hadirKelas1*50000+$hadirKelas2*50000+$hadirKelas3*80000+$hadirKelas4*50000;
        }  
        return view('laporanpelatih.index',[
            'pelatih'=>$pelatih,
            'totalGaji'=>$totalGaji
        ]);
    }

    public function cetak_pdf()
    {
    	$pelatih = pelatih::all();
        $id = absensi_pelatih::get('id_user');
        $totalGaji = [];
        foreach ($id as $item) {
            $id_user= $item->id_user;
            $hadirKelas1 = absensi_pelatih::where('id_user',$id_user)->where('status','Hadir')->where('kelas','1')->get()->count();
            $hadirKelas2 = absensi_pelatih::where('id_user',$id_user)->where('status','Hadir')->where('kelas','2')->get()->count();
            $hadirKelas3 = absensi_pelatih::where('id_user',$id_user)->where('status','Hadir')->where('kelas','3')->get()->count();
            $hadirKelas4 = absensi_pelatih::where('id_user',$id_user)->where('status','Hadir')->where('kelas','4')->get()->count();
            $totalGaji[$id_user]=$hadirKelas1*50000+$hadirKelas2*50000+$hadirKelas3*80000+$hadirKelas4*50000;
        }  
    	$pdf = PDF::loadview('laporanpelatih.pdf',['pelatih'=>$pelatih,'totalGaji'=>$totalGaji]);
    	return $pdf->download('Laporan_Pelatih.pdf');
    }
}

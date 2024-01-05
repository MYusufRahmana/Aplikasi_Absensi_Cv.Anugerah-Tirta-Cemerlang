<?php

namespace App\Http\Controllers;

use App\Models\AbsenAdmin;
use App\Models\absensi_pelatih;
use App\Models\AbsensiPelatih;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function index(Request $request)
    {
        $tahun_bulan = explode('-', $request->get('tahun_bulan', date('Y-m')));
        $laporan_absensi_pelatih = AbsensiPelatih::laporan($tahun_bulan);
        if ($request->get('pdf')) {
            return PDF::loadview('laporanpelatih.pdf', [
                'laporan_absensi_pelatih' => $laporan_absensi_pelatih
            ])->download('Laporan_Pelatih.pdf');
        } else {
            return view('laporanpelatih.index', [
                'laporan_absensi_pelatih' => $laporan_absensi_pelatih,
            ]);
        }
    }

    public function laporan_admin(Request $request)
    {
        $tahun_bulan = explode('-', $request->get('tahun_bulan', date('Y-m')));
        $laporan_absensi_admin = AbsenAdmin::laporan($tahun_bulan);
        if ($request->get('pdf')) {
            return PDF::loadview('laporanadmin.pdf', [
                'laporan_absensi_admin' => $laporan_absensi_admin
            ])->download('Laporan_Admin.pdf');
        } else {
            return view('laporanadmin.index', [
                'laporan_absensi_admin' => $laporan_absensi_admin
            ]);
        }
    }
}

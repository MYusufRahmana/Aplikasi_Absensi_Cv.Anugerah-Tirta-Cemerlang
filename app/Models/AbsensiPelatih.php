<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiPelatih extends Model
{
    use HasFactory;
    protected $fillable = ['id_user', 'waktu_absen', 'status', 'kelas'];
    protected $guarded = ['id_absensi'];
    protected $table = 'absensi_pelatih';
    protected $primaryKey = 'id_absensi_pelatih';

    public function pelatih()
    {
        return $this->belongsTo(pelatih::class, 'id_user', 'id');
    }

    public static function laporan($tahun_bulan)
    {
        return AbsensiPelatih::selectRaw(
            'id_user,
            SUM(CASE WHEN kelas=1 THEN 1 ELSE 0 END) AS jumlah_hadir_kelas_1,
            SUM(CASE WHEN kelas=2 THEN 1 ELSE 0 END) AS jumlah_hadir_kelas_2,
            SUM(CASE WHEN kelas=3 THEN 1 ELSE 0 END) AS jumlah_hadir_kelas_3,
            SUM(CASE WHEN kelas=4 THEN 1 ELSE 0 END) AS jumlah_hadir_kelas_4,
            COUNT(*) AS total_jumlah_hadir,
            (
                (SUM(CASE WHEN kelas=1 THEN 1 ELSE 0 END) * 50000) +
                (SUM(CASE WHEN kelas=2 THEN 1 ELSE 0 END) * 50000) +
                (SUM(CASE WHEN kelas=3 THEN 1 ELSE 0 END) * 80000) +
                (SUM(CASE WHEN kelas=4 THEN 1 ELSE 0 END) * 50000)
            ) AS total_gaji'
        )
            ->where('status', 'Hadir')
            ->whereYear('waktu_absen', $tahun_bulan[0])
            ->whereMonth('waktu_absen', $tahun_bulan[1])
            ->groupBy('id_user')
            ->get();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenAdmin extends Model
{
    use HasFactory;
    protected $guarded = 'id';
    protected $fillable = ['id_user', 'waktu_absen', 'status'];
    protected $table = 'absen_admins';

    public function Admin()
    {
        return $this->belongsTo(Admin::class, 'id_user', 'id');
    }

    public static function laporan($tahun_bulan)
    {
        return AbsenAdmin::selectRaw(
            'id_user,
            COUNT(*) AS jumlah_hadir,
            COUNT(*) * 50000 AS total_gaji'
        )
            ->where('status', 'Hadir')
            ->whereYear('waktu_absen', $tahun_bulan[0])
            ->whereMonth('waktu_absen', $tahun_bulan[1])
            ->groupBy('id_user')
            ->get();
    }
}

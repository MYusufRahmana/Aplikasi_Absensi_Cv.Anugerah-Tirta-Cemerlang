<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayatabsensipelatih extends Model
{
    use HasFactory;
    protected $guarded = 'id';
    protected $fillable = ['id_user','kelas','waktu_absen','status'];
    protected $table = "riwayat_absensi_pelatihs";

    public function pelatih() {
        return $this->belongsTo(pelatih::class,'id_user','id');
    }
}

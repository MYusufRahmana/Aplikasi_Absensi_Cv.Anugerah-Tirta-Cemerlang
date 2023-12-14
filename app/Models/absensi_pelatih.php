<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi_pelatih extends Model
{
    use HasFactory;
    protected $fillable = ['id_user','waktu_absen','status'];
    protected $guarded = ['id_absensi'];
    protected $table = 'absensi_pelatih';
    protected $primaryKey = 'id_absensi_pelatih';

    public function pelatih() {
        return $this->belongsTo(pelatih::class,'id_user','id');
    }
}

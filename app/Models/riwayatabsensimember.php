<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayatabsensimember extends Model
{
    use HasFactory;
    protected $guarded = 'id';
    protected $fillable = ['id_user','kelas','waktu_absen','status'];
    protected $table = "riwayat_absensi_members";

    public function register() {
        return $this->belongsTo(register::class,'id_user','id');
    }
}

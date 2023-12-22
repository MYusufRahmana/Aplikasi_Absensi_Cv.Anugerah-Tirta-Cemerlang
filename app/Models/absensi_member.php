<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi_member extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_absensi_member';
    protected $table = 'absensi_member';
    protected $fillable = ['id_user','waktu_absen','status','kelas'];

    public function register() {
        return $this->belongsTo(register::class,'id_user','no');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiMember extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_absensi_member';
    protected $table = 'absensi_member';
    protected $fillable = ['id_user', 'waktu_absen', 'status', 'id_kelas_member'];

    public function register()
    {
        return $this->belongsTo(Register::class, 'id_user', 'no');
    }

    public function kelas_member(){
        return $this->belongsTo(KelasMember::class, 'id_kelas_member', 'id');
    }
}

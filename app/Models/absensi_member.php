<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi_member extends Model
{
    use HasFactory;
    protected $table = 'absensi_member';
    protected $filiabe = ['id_absensi_member','id_jadwal','waktu_absen','hasil','status','keterangan'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi_member extends Model
{
    use HasFactory;
    protected $table = 'absensi_member';
    protected $fillable = ['id_user','waktu_absen','status'];

    // public function user() {
    //     return User
    // }
}

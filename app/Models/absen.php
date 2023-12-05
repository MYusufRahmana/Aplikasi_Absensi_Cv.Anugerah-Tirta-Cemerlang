<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absen extends Model
{
    use HasFactory;
    protected $table = 'absen'; // Ganti dengan nama tabel yang sesuai
    protected $fillable = ['id', 'user_id', 'tanggal_absen', 'waktu_scan', 'keterangan'];
}

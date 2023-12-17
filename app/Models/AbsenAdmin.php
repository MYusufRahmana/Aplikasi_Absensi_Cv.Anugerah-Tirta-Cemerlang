<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenAdmin extends Model
{
    use HasFactory;
    protected $guarded = 'id';
    protected $fillable = ['id_user','waktu_absen','status']; 

    public function Admin() {
        return $this->belongsTo(Admin::class,'id_user','id');
    }
}

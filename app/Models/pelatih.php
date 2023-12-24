<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelatih extends Model
{
    protected $table ="t_pelatih"; 
    protected $guarded =["id"]; 
    protected $primaryKey ="id"; 
    protected $fillable =['Nama_Pelatih','Hp','Email','password','Alamat','kelas','Username','role','status']; 
    use HasFactory;

    public function absensi_pelatih() {
        return $this->belongsTo(absensi_pelatih::class,'id','id_user');
    }

    public function riwayatabsensipelatih() {
        return $this->belongsTo(riwayatabsensipelatih::class,'id','id_user');
    }
}

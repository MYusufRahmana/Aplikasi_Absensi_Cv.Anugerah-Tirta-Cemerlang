<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelatih extends Model
{
    protected $table ="t_pelatih"; 
    protected $guarded =["id"]; 
    protected $fillable =['Nama_Pelatih','Hp','Email','password','alamat','username','role','gaji']; 
    use HasFactory;

    public function absensi_pelatih() {
        return $this->belongsTo(absensi_pelatih::class,'id','id_user');
    }
}

<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;
    protected $primaryKey = 'no';
    protected $guarded = "no";
    protected $table = 'registers';
    protected $fillable = ['Nama','Gender','Sekolah','Health','Tgl','Kelas','Ortu','Alamat','Hp','email','gbr','password','role'];

    public function absensi_member() {
        return $this->belongsTo(absensi_member::class,'No','id_user');
    }
}

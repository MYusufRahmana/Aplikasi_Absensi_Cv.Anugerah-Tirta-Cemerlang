<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;
    protected $table = 'registers';
    protected $filiabe = ['nama','Gender','Sekolah','Health','Tgl','Kelas','Ortu','email','gbr','password','role'];

    protected $primaryKey = 'no';
    public function absensi_member() {
        return $this->belongsTo(absensi_member::class,'No','id_user');
    }
}

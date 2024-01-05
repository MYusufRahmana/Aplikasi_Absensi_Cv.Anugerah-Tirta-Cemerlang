<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $primaryKey = 'no';
    protected $guarded = "no";
    protected $table = 'register';
    protected $fillable = ['no', 'Nama', 'Gender', 'Sekolah', 'Health', 'Tgl', 'Kelas', 'Ortu', 'Alamat', 'Hp', 'email', 'gbr', 'password', "status", 'role'];

    function kelas_member()
    {
        return $this->hasMany(KelasMember::class, 'id_user', 'no');
    }
}

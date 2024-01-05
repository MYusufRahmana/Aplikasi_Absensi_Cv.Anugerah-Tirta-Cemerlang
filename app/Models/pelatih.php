<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatih extends Model
{
    protected $table = "t_pelatih";
    protected $guarded = ["id"];
    protected $primaryKey = "id";
    protected $fillable = ['Nama_Pelatih', 'Hp', 'Email', 'password', 'Alamat', 'kelas', 'Username', 'role', 'status'];
    use HasFactory;

    public function AbsensiPelatih()
    {
        return $this->belongsTo(AbsensiPelatih::class, 'id', 'id_user');
    }
}

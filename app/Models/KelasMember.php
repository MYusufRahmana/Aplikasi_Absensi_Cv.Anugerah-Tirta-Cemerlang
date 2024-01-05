<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasMember extends Model
{
    use HasFactory;
    protected $table = 'kelas_member';
    protected $guarded = ['id'];
    protected $fillable = ['id_user', 'kelas', 'status'];
    protected $append = ['count_kehadiran', 'kelas_member_jenis'];

    public function member()
    {
        return $this->belongsTo(Register::class, 'id_user', 'no');
    }

    public function absensi()
    {
        return $this->hasMany(AbsensiMember::class, 'id_kelas_member', 'id');
    }

    public function getCountKehadiranAttribute()
    {
        return $this->absensi->count();
    }

    public function getKelasMemberJenisAttribute()
    {
        switch ($this->kelas) {
            case '1':
                return "Kelas Pemula - Group";
            case '2':
                return "Kelas Pemula - Regular";
            case '3':
                return "Kelas Pemula - Private";
            case '4':
                return "Jalur Prestasi";
            default:
                return "";
        }
    }
}

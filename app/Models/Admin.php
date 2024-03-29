<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Admin extends Model
{
    protected $table = 'admins';
    protected $guarded = 'id';
    protected $fillable = ['email', 'username', 'password', 'nama', 'hp', 'role', 'status'];
    use HasFactory;

    public function AbsenAdmin()
    {
        return $this->belongsTo(AbsenAdmin::class, 'id', 'id_user');
    }
}

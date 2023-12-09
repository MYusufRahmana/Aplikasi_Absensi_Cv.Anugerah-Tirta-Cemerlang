<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;
    protected $table = 'registers';
    protected $filiabe = ['nama','Gender','Sekolah','Health','Tgl','Kelas','Ortu','email','gbr','password','status'];
}

<?php

namespace Database\Seeders;

use App\Models\KelasMember;
use App\Models\Register;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $register1 = Register::create([
        //     'nama' => 'Yusuf Rahmana',
        //     'email' => 'yusuf@gmail.com',
        //     'Gender' => 'Laki-laki',
        //     'Sekolah' => 'SMPN 1',
        //     'Health' => 'Sehat',
        //     'Tgl' => '2000-01-01',
        //     'Kelas'=>'2',
        //     'Ortu' => 'Ayah',
        //     'Alamat' => 'Jl. Jalan',
        //     'Hp' => '081234567890',
        //     'gbr' => 'default.jpg',
        //     'status' => 1,
        //     'password' => bcrypt('yusuf'),
        //     'role' => 'member',
        // ]);
        //     $register2 = Register::create([
        //     'nama' => 'M Yusuf Rahmana',
        //     'email' => 'yusuf1@gmail.com',
        //     'Gender' => 'Laki-laki',
        //     'Sekolah' => 'SMPN 1',
        //     'Health' => 'Sehat',
        //     'Tgl' => '2000-01-01',
        //     'Kelas'=>'2',
        //     'Ortu' => 'Ayah',
        //     'Alamat' => 'Jl. Jalan',
        //     'Hp' => '081234567890',
        //     'gbr' => 'default.jpg',
        //     'status' => 1,
        //     'password' => bcrypt('yusuf'),
        //     'role' => 'member',
        // ]);
        $register3 = Register::create([
            'nama' => 'Muh Yusuf Rahmana',
            'email' => 'yusuf2@gmail.com',
            'Gender' => 'Laki-laki',
            'Sekolah' => 'SMPN 1',
            'Health' => 'Sehat',
            'Tgl' => '2000-01-01',
            'Kelas'=>'2',
            'Ortu' => 'Ayah',
            'Alamat' => 'Jl. Jalan',
            'Hp' => '081234567890',
            'gbr' => 'default.jpg',
            'status' => 1,
            'password' => bcrypt('yusuf'),
            'role' => 'member',
        ]);

     }
}

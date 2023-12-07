<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'nama' => 'Test User',
        //     'email' => 'test@example.com',
        //     'pasword' => bcrypt('password'),
        // ]);

        DB::table('registers')->insert([
            'nama' => 'Test User',
            'email' => 'user@gmail.com',
            'Gender' => 'Laki-laki',
            'Sekolah' => 'SMPN 1',
            'Health' => 'Sehat',
            'Tgl' => '2000-01-01',
            'Kelas' => '7',
            'Ortu' => 'Ayah',
            'Alamat' => 'Jl. Jalan',
            'Hp' => '081234567890',
            'gbr' => 'default.jpg',
            'status' => '1',
            'password' => bcrypt('password'),
        ]);
        DB::table('t_pelatih')->insert([
            'kode_pelatih' => '0001',
            'Nama_pelatih' => 'Pelatih 1',
            'HP' => 'samsung',
            'Telp' => '081277788',
            'Email' => 'pelatih1@gmail.com',
            'Alamat' => 'jln harapan 1',
            'Username' => 'Pelatih1',
        ]);
        DB::table('kelas')->insert([
            'id_kelas' => '001',
            'nama_kelas' => 'reguler',
            'gaji_pelatih' => '50000',
            
        ]);
        DB::table('sesi')->insert([
            'id_sesi' => '000001',
            'user_id' => '1',
            'id_kelas' => '001',
            'batas_jadwal' => '12'
    
        ]);
        DB::table('jadwal')->insert([
            'id_jadwal' => '000001',
            'id_sesi' => '000001',
            'kode_pelatih' => '0001',
            'waktu_mulai' => now(),
            'waktu_selesai' => now()->addHours(1)
    
        ]);
    }
}

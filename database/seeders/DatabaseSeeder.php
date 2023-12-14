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
            'nama' => 'Yusuf Rahmana',
            'email' => 'yusuf@gmail.com',
            'Gender' => 'Laki-laki',
            'Sekolah' => 'SMPN 1',
            'Health' => 'Sehat',
            'Tgl' => '2000-01-01',
            'Kelas' => '2',
            'Ortu' => 'Ayah',
            'Alamat' => 'Jl. Jalan',
            'Hp' => '081234567890',
            'gbr' => 'default.jpg',
            'password' => bcrypt('yusuf'),
            'role' => 'member',
        ]);
        DB::table('registers')->insert([
            'nama' => 'andi',
            'email' => 'andi@gmail.com',
            'Gender' => 'Laki-laki',
            'Sekolah' => 'SMPN 1',
            'Health' => 'Sehat',
            'Tgl' => '2000-01-01',
            'Kelas' => '4',
            'Ortu' => 'Ayah',
            'Alamat' => 'Jl. Jalan',
            'Hp' => '081234567890',
            'gbr' => 'default.jpg',
            'password' => bcrypt('andi'),
            'role'=>'member',
        ]);
        
        DB::table('t_pelatih')->insert([
            'id' => '1',
            'Nama_pelatih' => 'Pelatih 1',
            'Hp' => '081277788',
            'Email' => 'pelatih@gmail.com',
            'password' => bcrypt('pelatih'),
            'Alamat' => 'jln harapan 1',
            'Username' => 'pelatih',
            'role' => 'pelatih'
        ]);

        DB::table('t_pelatih')->insert([
            'id' => '2',
            'Nama_pelatih' => 'Pelatih 2',
            'Hp' => '081277788',
            'Email' => 'pelatih2@gmail.com',
            'password' => bcrypt('pelatih'),
            'Alamat' => 'jln harapan 1',
            'Username' => 'pelatih',
            'role' => 'pelatih'
        ]);

        DB::table('admins')->insert([
            'id' => '1',
            'email'=>"admin@gmail.com",
            'username' => 'admin1',
            'password' => bcrypt('admin'),
            'nama' => 'Lukman',
            'hp' => '089532671289',
            'role' => 'admin'
        ]);
        // DB::table('kelas')->insert([
        //     'id_kelas' => '001',
        //     'nama_kelas' => 'reguler',
        //     'gaji_pelatih' => '50000',

        // ]);
        // DB::table('sesi')->insert([
        //     'id_sesi' => '000001',
        //     'user_id' => '1',
        //     'id_kelas' => '001',
        //     'batas_jadwal' => '12'

        // ]);
        // DB::table('jadwal')->insert([
        //     'id_jadwal' => '000001',
        //     'id_sesi' => '000001',
        //     'kode_pelatih' => '0001',
        //     'waktu_mulai' => now(),
        //     'waktu_selesai' => now()->addHours(1)

        // ]);
    }
}

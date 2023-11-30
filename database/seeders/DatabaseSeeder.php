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
    }
}

<?php

namespace Database\Seeders;

use App\Models\Pelatih;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelatihSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelatih::create([
            'id' => '1',
            'Nama_pelatih' => 'Pelatih 1',
            'Hp' => '081277788',
            'Email' => 'pelatih@gmail.com',
            'kelas' => '2',
            'password' => bcrypt('pelatih'),
            'Alamat' => 'jln harapan 1',
            'role' => 'pelatih',
            'status' => 1,
        ]);

        Pelatih::create([
            'id' => '2',
            'Nama_pelatih' => 'Pelatih 2',
            'Hp' => '081277788',
            'Email' => 'pelatih2@gmail.com',
            'kelas' => '2',
            'password' => bcrypt('pelatih'),
            'Alamat' => 'jln harapan 1',
            'role' => 'pelatih',
            'status' => 1,
        ]);
    }
}

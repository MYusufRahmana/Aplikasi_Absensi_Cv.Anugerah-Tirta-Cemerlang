<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Pelatih;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'id' => '1',
            'email' => "admin@gmail.com",
            'username' => 'admin1',
            'password' => bcrypt('admin'),
            'nama' => 'Lukman',
            'hp' => '089532671289',
            'role' => 'admin'
        ]);
        Admin::create([
            'id' => '2',
            'email' => "admin2@gmail.com",
            'username' => 'admin2',
            'password' => bcrypt('admin'),
            'nama' => 'Usman',
            'hp' => '089532671289',
            'role' => 'admin'
        ]);
        Admin::create([
            'id' => '3',
            'email' => "superadmin@gmail.com",
            'username' => 'superadmin',
            'password' => bcrypt('superadmin'),
            'nama' => 'superadmin',
            'hp' => '089532671289',
            'role' => 'superadmin'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create
        ([
            'name' => 'Samuel Ricardo Quintero Agudelo',
            'email' => 'squintero@correo.com',
            'password' => bcrypt('admin123')
        ]);
    }
}

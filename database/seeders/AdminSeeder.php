<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Administrador',
            'lastname' => '',
            'lastname1' => '',
            'CI' => '0',
            'email' => 'administrador@gmail.com',
            'fechaNacimiento' => '2000-01-01',
            'email_verified_at' => '2000-01-01',
            'role_id' => 1,
            'password' => bcrypt('admin123')

        ]);
    }
}

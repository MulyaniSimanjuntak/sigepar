<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //user
        User::create([
            'name' => 'Jaime Christ Bonar Sirait',
            'email_verified_at' => '2022-02-02',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Laguboti',
            'no_telp' => '082277886202',
            'password' => 1234,
            'confirmPassword' => 1234
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Iván Cardel',
            'email' => 'ivan.cardel@ykm.com.mx',
            'password' => bcrypt('1708')
        ]);
        User::factory(99)->create();
    }
}

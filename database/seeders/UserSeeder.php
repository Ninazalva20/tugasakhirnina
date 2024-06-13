<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test',
            'username' => 'test',
            'phone' => '0821-2149-5806',
            'password' => Hash::make('Minimal8'),
            'role' => 'admin',
            'address' => 'Jl. Jend. Ahmad Yani No.98, Nagri Tengah, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41114'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Bidang;
use App\Models\Faq;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'username' => 'admin',
            'level' => 'admin',
            'password' => Hash::make('admin'),
        ]);
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin3244@example.com',
            'username' => 'admin3244',
            'level' => 'admin',
            'password' => Hash::make('admin3244'),
        ]);
        User::factory()->create([
            'name' => 'Admin Bidang',
            'email' => 'aset@example.com',
            'username' => '1',
            'level' => 'bidang',
            'bidang_id' => 1,
            'password' => Hash::make('1'),
        ]);
        Faq::factory()->create([
            'ket' => '-',
        ]);
        Bidang::factory()->create([
            'nama' => 'Bidang Aset',
        ]);
    }
}

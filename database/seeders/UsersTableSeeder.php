<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin2',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('catar'),
        ]);
    }
}

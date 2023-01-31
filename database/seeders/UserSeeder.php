<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Kadir Razu",
            'name_bn' => "কাদির রাজু",
            'email' => "admin@kadir.tech",
            'username' => "kadirrazu",
            'password' => bcrypt('654321a'),
            'role' => "administrator",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => "Ramisha Nujhat",
            'name_bn' => "রামিশা নুজহাত",
            'email' => "nujhat@kadir.tech",
            'username' => "nujhat",
            'password' => bcrypt('654321'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

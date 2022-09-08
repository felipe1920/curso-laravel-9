<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'felipe',
            'email' => 'felipe.telom1@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        // não rola, nen com reza braba
        User::created([
            'name' => 'flores',
            'email' => 'flores@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}

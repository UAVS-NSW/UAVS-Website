<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'secret_key'    => '3745821',
            'email'         => 'admin@gmail.com',
            'password'      => Hash::make('123456'),
            'status'        => '1',
        ]);
    }
}

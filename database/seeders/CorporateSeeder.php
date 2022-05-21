<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class CorporateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('corporates')->insert([
            'name' => 'Corporate10',
            'email' => 'corporate@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}

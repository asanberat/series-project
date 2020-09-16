<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
           'name'=>'admin',
           'email'=>'admin@kreator.com',
           'password'=>123456789,
           ],
         [
         'name'=>'editor',
         'email'=>'editor@kreator.com',
         'password'=>123456789
             ],
        ]);
    }
}

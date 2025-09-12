<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'name'=>'Super Admin',
                'email'=>'super@email.com',
                'username'=>'super_admin',
                'password'=>bcrypt('admin@121'),

            ],
            [
                'name'=>'MAnik Khan',
                'email'=>'manik@email.com',
                'username'=>'manik_cmbs',
                'password'=>bcrypt('manik@cbms'),

            ],
            [
                'name'=>'Nazmul',
                'email'=>'admin@email.com',
                'username'=>'nazmul_cbms',
                'password'=>bcrypt('nazmul@cbms'),

            ],
        ];
        DB::table('users')->insert($data);
    }
}

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
                'type'=>'1',

            ],
            [
                'name'=>'Nahid Limu',
                'email'=>'nahidlimu@email.com',
                'username'=>'nahid_cbms',
                'password'=>bcrypt('nahid@cbms'),
                'type'=>'2',

            ],
            [
                'name'=>'Manik Khan',
                'email'=>'manik@email.com',
                'username'=>'manik_cbms',
                'password'=>bcrypt('manik@cbms'),
                'type'=>'2',

            ],
            [
                'name'=>'Nazmul',
                'email'=>'nazmul@email.com',
                'username'=>'nazmul_cbms',
                'password'=>bcrypt('nazmul@cbms'),
                'type'=>'2',

            ],
        ];
        DB::table('users')->insert($data);
    }
}

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
                'email'=>'super@cbmspg.com',
                'username'=>'super_admin',
                'password'=>bcrypt('admin@121'),
                'type'=>'1',

            ],
            [
                'name'=>'Nahid Limu',
                'email'=>'nahidlimu@cbmspg.com',
                'username'=>'nahid_cbms',
                'password'=>bcrypt('nahid@cbms'),
                'type'=>'2',

            ],
            [
                'name'=>'Manik Khan',
                'email'=>'manik@cbmspg.com',
                'username'=>'manik_cbms',
                'password'=>bcrypt('manik@cbms'),
                'type'=>'2',

            ],
            [
                'name'=>'Nazmul',
                'email'=>'nazmul@cbmspg.com',
                'username'=>'nazmul_cbms',
                'password'=>bcrypt('nazmul@cbms'),
                'type'=>'2',

            ],
            [
                'name'=>'Habibur',
                'email'=>'habibur@cbmspg.com',
                'username'=>'habibur_cbms',
                'password'=>bcrypt('habibur@cbms'),
                'type'=>'2',

            ],
        ];
        DB::table('users')->insert($data);
    }
}

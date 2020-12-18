<?php

use Illuminate\Database\Seeder;

class roleadmin_manager extends Seeder
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
            'name'=>'Manager',
            'email'=> 'admin@yahoo.com',
            'password'=>bcrypt('admin123'),
            'DOB'=>'2020-12-12',
            'Address'=>'jalan puyuh ix',
            'Gender'=>'female',
            'roleadmin'=>'1'
            ],
         ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'super admin',
                'email' => 'super_admin@ivas.com',
                'password' => '$2y$10$u2evAW530miwgUb2jcXkTuqIGswxnSQ3DSmX1Ji5rtO3Tx.MtVcX2',
                'image' => '',
                'phone' => '01234567890',
                'remember_token' => 'iE7EW6ByEJDzv6ETuEkZ0BWNFCxkaDUJaOEQzpwjtRcPJ79WEBUBHgzJmgkb',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2019-02-25 10:11:49',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'mohamed',
                'email' => 'mohamed@ivas.com',
                'password' => '$2y$10$SZC9hsU6H07LbGng5A3uw.KwtdQHogK7a6lHCsXp6ACAkEll5zSnS',
                'image' => '',
                'phone' => '01125803696',
                'remember_token' => NULL,
                'created_at' => '2019-02-25 10:11:43',
                'updated_at' => '2019-02-25 10:11:43',
            ),
        ));
        
        
    }
}

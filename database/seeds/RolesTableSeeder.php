<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'super_admin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'role_priority' => 1,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'admin',
                'created_at' => '2018-01-04 08:07:58',
                'updated_at' => '2018-01-04 08:07:58',
                'role_priority' => 2,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'user',
                'created_at' => '2018-01-04 08:08:07',
                'updated_at' => '2018-01-04 08:08:07',
                'role_priority' => 3,
            ),
        ));
        
        
    }
}

<?php

use Illuminate\Database\Seeder;

class RoleRouteTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_route')->delete();
        
        \DB::table('role_route')->insert(array (
            0 => 
            array (
                'id' => 8,
                'role_id' => 1,
                'route_id' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}

<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 25,
                'key' => 'uploadAllow',
                'value' => 'all',
                'created_at' => '2018-02-04 12:04:09',
                'updated_at' => '2018-02-04 12:04:09',
                'type_id' => 6,
                'order' => 0,
            ),
        ));
        
        
    }
}

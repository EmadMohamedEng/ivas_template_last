<?php

use Illuminate\Database\Seeder;

class OperatorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('operators')->delete();
        
        \DB::table('operators')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'etisalat',
                'rbt_sms_code' => '123',
                'rbt_ussd_code' => '1234',
                'image' => '1549890755615.png',
                'country_id' => 1,
                'created_at' => '2019-02-11 13:12:35',
                'updated_at' => '2019-02-11 13:12:35',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Zain',
                'rbt_sms_code' => '1234',
                'rbt_ussd_code' => '12345',
                'image' => '1549890778951.png',
                'country_id' => 2,
                'created_at' => '2019-02-11 13:12:58',
                'updated_at' => '2019-02-11 13:12:58',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Vodafone',
                'rbt_sms_code' => '123',
                'rbt_ussd_code' => '',
                'image' => '1549898629360.png',
                'country_id' => 1,
                'created_at' => '2019-02-11 15:23:49',
                'updated_at' => '2019-02-11 15:23:49',
            ),
        ));
        
        
    }
}

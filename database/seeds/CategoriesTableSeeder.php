<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Aflam',
                'image' => '1550152145324.jpg',
                'created_at' => '2019-02-14 13:49:05',
                'updated_at' => '2019-02-14 13:49:05',
                'parent_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Category 2',
                'image' => '1550577156831.jpg',
                'created_at' => '2019-02-14 14:35:00',
                'updated_at' => '2019-02-19 11:52:36',
                'parent_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'sub_Category 2',
                'image' => '1551862904307.png',
                'created_at' => '2019-03-06 09:01:44',
                'updated_at' => '2019-03-06 09:01:44',
                'parent_id' => 1,
            ),
        ));
        
        
    }
}

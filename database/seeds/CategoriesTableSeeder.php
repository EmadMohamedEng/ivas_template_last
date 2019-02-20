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
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Category 2',
                'image' => '1550577156831.jpg',
                'created_at' => '2019-02-14 14:35:00',
                'updated_at' => '2019-02-19 11:52:36',
            ),
        ));
        
        
    }
}

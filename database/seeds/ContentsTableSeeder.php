<?php

use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contents')->delete();
        
        \DB::table('contents')->insert(array (
            0 => 
            array (
                'id' => 11,
                'title' => 'Content 1',
                'path' => '1550588179859.jpg',
                'image_preview' => NULL,
                'content_type_id' => 3,
                'category_id' => 1,
                'created_at' => '2019-02-19 09:14:20',
                'updated_at' => '2019-02-19 14:56:19',
            ),
            1 => 
            array (
                'id' => 12,
                'title' => 'dd',
                'path' => '1550589274464.png',
                'image_preview' => NULL,
                'content_type_id' => 3,
                'category_id' => 1,
                'created_at' => '2019-02-19 09:14:38',
                'updated_at' => '2019-02-19 15:14:34',
            ),
            2 => 
            array (
                'id' => 13,
                'title' => 'f',
                'path' => '1550590462462.mp4',
                'image_preview' => '1550589300614.png',
                'content_type_id' => 5,
                'category_id' => 1,
                'created_at' => '2019-02-19 09:15:20',
                'updated_at' => '2019-02-19 15:34:22',
            ),
        ));
        
        
    }
}

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
                'title' => 'new',
                'path' => '1551190970700.mp4',
                'image_preview' => '1551190969770.jpg',
                'content_type_id' => 5,
                'category_id' => 1,
                'created_at' => '2019-02-19 09:14:38',
                'updated_at' => '2019-02-26 14:22:50',
            ),
            2 => 
            array (
                'id' => 13,
                'title' => 'Content 2',
                'path' => '1551190934599.mp4',
                'image_preview' => '1551190934751.jpg',
                'content_type_id' => 5,
                'category_id' => 1,
                'created_at' => '2019-02-19 09:15:20',
                'updated_at' => '2019-02-26 14:22:14',
            ),
            3 => 
            array (
                'id' => 14,
                'title' => 'title 1',
                'path' => '1551190923518.mp4',
                'image_preview' => '1551190923993.jpg',
                'content_type_id' => 5,
                'category_id' => 1,
                'created_at' => '2019-02-24 13:56:31',
                'updated_at' => '2019-02-26 14:22:03',
            ),
            4 => 
            array (
                'id' => 21,
                'title' => 'new',
                'path' => 'https://www.youtube.com/embed/csBE9bxtkec?rel=0',
                'image_preview' => '1551863019118.jpg',
                'content_type_id' => 6,
                'category_id' => 3,
                'created_at' => '2019-03-06 09:02:00',
                'updated_at' => '2019-03-06 09:03:39',
            ),
            5 => 
            array (
                'id' => 22,
                'title' => 'naser',
                'path' => 'http://www.youtube.com/embed/bTOlMI5imqg?rel=0',
                'image_preview' => '15518630980.jpg',
                'content_type_id' => 6,
                'category_id' => 1,
                'created_at' => '2019-03-06 09:04:00',
                'updated_at' => '2019-03-06 09:04:59',
            ),
        ));
        
        
    }
}

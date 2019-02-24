<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 39,
                'published_date' => '2019-02-15',
                'active' => 1,
                'patch_number' => '123',
                'url' => 'http://localhost/ivas_template_last/user/content/1?op_id=1&post_id=39',
                'content_id' => 1,
                'operator_id' => 1,
                'user_id' => 1,
                'created_at' => '2019-02-19 08:54:25',
                'updated_at' => '2019-02-19 08:54:25',
            ),
            1 => 
            array (
                'id' => 40,
                'published_date' => '2019-02-15',
                'active' => 1,
                'patch_number' => '123',
                'url' => 'http://localhost/ivas_template_last/user/content/1?op_id=2&post_id=40',
                'content_id' => 1,
                'operator_id' => 2,
                'user_id' => 1,
                'created_at' => '2019-02-19 08:54:25',
                'updated_at' => '2019-02-19 08:54:25',
            ),
            2 => 
            array (
                'id' => 41,
                'published_date' => '2019-02-15',
                'active' => 1,
                'patch_number' => '123',
                'url' => 'http://localhost/ivas_template_last/user/content/1?op_id=4&post_id=41',
                'content_id' => 1,
                'operator_id' => 4,
                'user_id' => 1,
                'created_at' => '2019-02-19 08:54:25',
                'updated_at' => '2019-02-19 08:54:25',
            ),
            3 => 
            array (
                'id' => 42,
                'published_date' => '2019-02-16',
                'active' => 1,
                'patch_number' => '14',
                'url' => 'http://localhost/ivas_template_last/user/content/3?op_id=2&post_id=42',
                'content_id' => 3,
                'operator_id' => 1,
                'user_id' => 1,
                'created_at' => '2019-02-19 08:55:07',
                'updated_at' => '2019-02-19 08:55:07',
            ),
            4 => 
            array (
                'id' => 43,
                'published_date' => '2019-02-16',
                'active' => 1,
                'patch_number' => '14',
                'url' => 'http://localhost/ivas_template_last/user/content/3?op_id=2&post_id=43',
                'content_id' => 3,
                'operator_id' => 2,
                'user_id' => 1,
                'created_at' => '2019-02-19 08:55:07',
                'updated_at' => '2019-02-19 08:55:07',
            ),
            5 => 
            array (
                'id' => 44,
                'published_date' => '2019-02-20',
                'active' => 0,
                'patch_number' => '14532',
                'url' => 'http://localhost/ivas_template_last/user/content/11?op_id=1&post_id=44',
                'content_id' => 11,
                'operator_id' => 1,
                'user_id' => 1,
                'created_at' => '2019-02-19 09:46:48',
                'updated_at' => '2019-02-19 10:02:49',
            ),
            6 => 
            array (
                'id' => 46,
                'published_date' => '2019-02-01',
                'active' => 1,
                'patch_number' => '121',
                'url' => 'http://localhost/ivas_template_last/user/content/11?op_id=2&post_id=46',
                'content_id' => 11,
                'operator_id' => 2,
                'user_id' => 1,
                'created_at' => '2019-02-19 09:53:00',
                'updated_at' => '2019-02-19 09:53:09',
            ),
            7 => 
            array (
                'id' => 47,
                'published_date' => '2019-02-15',
                'active' => 1,
                'patch_number' => '145',
                'url' => 'http://localhost/ivas_template_last/user/content/11?op_id=2&post_id=47',
                'content_id' => 11,
                'operator_id' => 2,
                'user_id' => 1,
                'created_at' => '2019-02-19 10:03:05',
                'updated_at' => '2019-02-19 10:03:05',
            ),
            8 => 
            array (
                'id' => 48,
                'published_date' => '2019-02-15',
                'active' => 1,
                'patch_number' => '145',
                'url' => 'http://localhost/ivas_template_last/user/content/11?op_id=4&post_id=48',
                'content_id' => 11,
                'operator_id' => 4,
                'user_id' => 1,
                'created_at' => '2019-02-19 10:03:05',
                'updated_at' => '2019-02-19 10:03:05',
            ),
        ));
        
        
    }
}

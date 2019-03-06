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
                'id' => 1,
                'published_date' => '2019-02-15',
                'active' => 1,
                'patch_number' => '123',
                'url' => 'http://localhost/ivas_template_last/user/content/14?op_id=4&post_id=1',
                'content_id' => 14,
                'operator_id' => 4,
                'user_id' => 2,
                'created_at' => '2019-02-20 08:00:01',
                'updated_at' => '2019-02-25 10:18:01',
            ),
            1 => 
            array (
                'id' => 2,
                'published_date' => '2019-02-23',
                'active' => 0,
                'patch_number' => '14563',
                'url' => 'http://localhost/ivas_template_last/user/content/12?op_id=2&post_id=2',
                'content_id' => 12,
                'operator_id' => 2,
                'user_id' => 2,
                'created_at' => '2019-02-25 10:12:40',
                'updated_at' => '2019-02-25 10:19:01',
            ),
            2 => 
            array (
                'id' => 3,
                'published_date' => '2019-02-14',
                'active' => 1,
                'patch_number' => '12345',
                'url' => 'http://localhost/ivas_template_last/user/content/21?op_id=2&post_id=3',
                'content_id' => 21,
                'operator_id' => 2,
                'user_id' => 1,
                'created_at' => '2019-03-06 09:02:29',
                'updated_at' => '2019-03-06 09:02:29',
            ),
        ));
        
        
    }
}

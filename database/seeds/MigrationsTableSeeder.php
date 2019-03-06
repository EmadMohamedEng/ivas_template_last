<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'migration' => '2015_10_31_162633_scaffoldinterfaces',
                'batch' => 1,
            ),
            3 => 
            array (
                'migration' => '2017_08_01_141233_create_permission_tables',
                'batch' => 1,
            ),
            4 => 
            array (
                'migration' => '2017_09_20_131500_create_first_user',
                'batch' => 1,
            ),
            5 => 
            array (
                'migration' => '2017_10_16_084836_create_settings_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'migration' => '2017_10_25_094626_create_translatable_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'migration' => '2017_10_25_095102_create_language_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'migration' => '2017_10_25_095200_create_translate_body',
                'batch' => 1,
            ),
            9 => 
            array (
                'migration' => '2017_10_25_113637_add_short_code_and_rtl_to_language',
                'batch' => 1,
            ),
            10 => 
            array (
                'migration' => '2017_10_31_091358_create_static_translations_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'migration' => '2017_10_31_091835_create_static_body_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'migration' => '2017_11_09_081714_create_role_route_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'migration' => '2017_11_09_081714_create_routes_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'migration' => '2017_11_09_081715_add_foreign_keys_to_role_route_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'migration' => '2017_11_14_115606_isolate_controller_from_method',
                'batch' => 1,
            ),
            16 => 
            array (
                'migration' => '2017_11_15_092424_adding_standards_routes',
                'batch' => 1,
            ),
            17 => 
            array (
                'migration' => '2017_12_19_092552_add_type_field_to_settings',
                'batch' => 1,
            ),
            18 => 
            array (
                'migration' => '2018_01_04_081336_adding_priorty_field_to_role_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'migration' => '2018_01_08_074915_phone_col_null',
                'batch' => 1,
            ),
            20 => 
            array (
                'migration' => '2018_01_28_075912_add_type_table_to_template',
                'batch' => 1,
            ),
            21 => 
            array (
                'migration' => '2018_01_28_080917_rename_type_coloumn_in_settings',
                'batch' => 1,
            ),
            22 => 
            array (
                'migration' => '2018_01_28_081429_add_foriegn_keys_to_settings_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'migration' => '2018_01_28_090855_add_order_coloumn_to_settings_table',
                'batch' => 1,
            ),
            24 => 
            array (
                'migration' => '2018_02_04_080901_create_delete_all_table',
                'batch' => 1,
            ),
            25 => 
            array (
                'migration' => '2019_02_10_073431_create_countries_table',
                'batch' => 1,
            ),
            26 => 
            array (
                'migration' => '2019_02_10_073454_create_operators_table',
                'batch' => 1,
            ),
            27 => 
            array (
                'migration' => '2019_02_12_124621_create_categories_table',
                'batch' => 1,
            ),
            28 => 
            array (
                'migration' => '2019_02_12_124712_create_content_types_table',
                'batch' => 1,
            ),
            29 => 
            array (
                'migration' => '2019_02_12_124731_create_contents_table',
                'batch' => 1,
            ),
            30 => 
            array (
                'migration' => '2019_02_12_130119_create_posts_table',
                'batch' => 1,
            ),
            31 => 
            array (
                'migration' => '2019_02_20_073231_change_contnent_path_type',
                'batch' => 1,
            ),
            32 => 
            array (
                'migration' => '2019_03_06_085632_add_parent_id_to_category',
                'batch' => 2,
            ),
        ));
        
        
    }
}

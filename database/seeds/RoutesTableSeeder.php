<?php

use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('routes')->delete();
        
        \DB::table('routes')->insert(array (
            0 => 
            array (
                'id' => 2,
                'method' => 'get',
                'route' => 'setting/new',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2018-02-05 13:39:21',
                'function_name' => 'create',
            ),
            1 => 
            array (
                'id' => 3,
                'method' => 'post',
                'route' => 'setting',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2018-02-05 13:39:21',
                'function_name' => 'store',
            ),
            2 => 
            array (
                'id' => 4,
                'method' => 'get',
                'route' => 'dashboard',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2018-07-24 13:47:45',
                'function_name' => 'index',
            ),
            3 => 
            array (
                'id' => 5,
                'method' => 'get',
                'route' => '/',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'index',
            ),
            4 => 
            array (
                'id' => 6,
                'method' => 'get',
                'route' => 'user_profile',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'profile',
            ),
            5 => 
            array (
                'id' => 7,
                'method' => 'post',
                'route' => 'user_profile/updatepassword',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-14 12:29:01',
                'function_name' => 'UpdatePassword',
            ),
            6 => 
            array (
                'id' => 8,
                'method' => 'post',
                'route' => 'user_profile/updateprofilepic',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-14 12:29:08',
                'function_name' => 'UpdateProfilePicture',
            ),
            7 => 
            array (
                'id' => 9,
                'method' => 'post',
                'route' => 'user_profile/updateuserdata',
                'controller_name' => 'UserController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-14 12:29:19',
                'function_name' => 'UpdateNameAndEmail',
            ),
            8 => 
            array (
                'id' => 10,
                'method' => 'get',
                'route' => 'setting/{id}/delete',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2018-02-05 13:39:22',
                'function_name' => 'destroy',
            ),
            9 => 
            array (
                'id' => 11,
                'method' => 'get',
                'route' => 'setting/{id}/edit',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2018-02-05 13:39:21',
                'function_name' => 'edit',
            ),
            10 => 
            array (
                'id' => 12,
                'method' => 'post',
                'route' => 'setting/{id}',
                'controller_name' => 'SettingController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2018-02-05 13:56:27',
                'function_name' => 'update',
            ),
            11 => 
            array (
                'id' => 14,
                'method' => 'get',
                'route' => 'static_translation',
                'controller_name' => 'StaticTranslationController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-14 12:29:57',
                'function_name' => 'index',
            ),
            12 => 
            array (
                'id' => 21,
                'method' => 'get',
                'route' => 'file_manager',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'file_manager',
            ),
            13 => 
            array (
                'id' => 22,
                'method' => 'get',
                'route' => 'upload_items',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'multi_upload',
            ),
            14 => 
            array (
                'id' => 23,
                'method' => 'post',
                'route' => 'save_items',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'save_uploaded',
            ),
            15 => 
            array (
                'id' => 24,
                'method' => 'get',
                'route' => 'upload_resize',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'upload_resize',
            ),
            16 => 
            array (
                'id' => 25,
                'method' => 'post',
                'route' => 'save_image',
                'controller_name' => 'DashboardController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'save_image',
            ),
            17 => 
            array (
                'id' => 26,
                'method' => 'post',
                'route' => 'static_translation/{id}/update',
                'controller_name' => 'StaticTranslationController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-11-12 12:19:46',
                'function_name' => 'update',
            ),
            18 => 
            array (
                'id' => 27,
                'method' => 'get',
                'route' => 'static_translation/{id}/delete',
                'controller_name' => 'StaticTranslationController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'destroy',
            ),
            19 => 
            array (
                'id' => 28,
                'method' => 'get',
                'route' => 'language/{id}/delete',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'destroy',
            ),
            20 => 
            array (
                'id' => 29,
                'method' => 'post',
                'route' => 'language/{id}/update',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'update',
            ),
            21 => 
            array (
                'id' => 30,
                'method' => 'get',
                'route' => 'roles',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'index',
            ),
            22 => 
            array (
                'id' => 31,
                'method' => 'get',
                'route' => 'roles/new',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'create',
            ),
            23 => 
            array (
                'id' => 32,
                'method' => 'post',
                'route' => 'roles',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'store',
            ),
            24 => 
            array (
                'id' => 33,
                'method' => 'get',
                'route' => 'roles/{id}/delete',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'destroy',
            ),
            25 => 
            array (
                'id' => 34,
                'method' => 'get',
                'route' => 'roles/{id}/edit',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'edit',
            ),
            26 => 
            array (
                'id' => 35,
                'method' => 'post',
                'route' => 'roles/{id}/update',
                'controller_name' => 'RoleController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'update',
            ),
            27 => 
            array (
                'id' => 36,
                'method' => 'get',
                'route' => 'language',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'index',
            ),
            28 => 
            array (
                'id' => 37,
                'method' => 'get',
                'route' => 'language/create',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'create',
            ),
            29 => 
            array (
                'id' => 38,
                'method' => 'post',
                'route' => 'language',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'store',
            ),
            30 => 
            array (
                'id' => 39,
                'method' => 'get',
                'route' => 'language/{id}/edit',
                'controller_name' => 'LanguageController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'edit',
            ),
            31 => 
            array (
                'id' => 40,
                'method' => 'get',
                'route' => 'routes',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'index',
            ),
            32 => 
            array (
                'id' => 41,
                'method' => 'post',
                'route' => 'routes',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'store',
            ),
            33 => 
            array (
                'id' => 42,
                'method' => 'get',
                'route' => 'routes/{id}/edit',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'edit',
            ),
            34 => 
            array (
                'id' => 43,
                'method' => 'post',
                'route' => 'routes/{id}/update',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2018-01-28 09:25:29',
                'function_name' => 'update',
            ),
            35 => 
            array (
                'id' => 44,
                'method' => 'get',
                'route' => 'routes/{id}/delete',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'destroy',
            ),
            36 => 
            array (
                'id' => 45,
                'method' => 'get',
                'route' => 'routes/create',
                'controller_name' => 'RouteController',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'function_name' => 'create',
            ),
            37 => 
            array (
                'id' => 57,
                'method' => 'get',
                'route' => 'routes/index_v2',
                'controller_name' => 'RouteController',
                'created_at' => '2017-11-12 13:45:15',
                'updated_at' => '2017-11-12 14:04:53',
                'function_name' => 'index_v2',
            ),
            38 => 
            array (
                'id' => 58,
                'method' => 'get',
                'route' => 'roles/{id}/view_access',
                'controller_name' => 'RoleController',
                'created_at' => '2017-11-14 10:56:14',
                'updated_at' => '2017-11-15 08:14:14',
                'function_name' => 'view_access',
            ),
            39 => 
            array (
                'id' => 59,
                'method' => 'get',
                'route' => 'types/index',
                'controller_name' => 'TypeController',
                'created_at' => '2018-01-28 08:25:37',
                'updated_at' => '2018-01-28 08:25:37',
                'function_name' => 'index',
            ),
            40 => 
            array (
                'id' => 60,
                'method' => 'get',
                'route' => 'types/create',
                'controller_name' => 'TypeController',
                'created_at' => '2018-01-28 08:25:37',
                'updated_at' => '2018-01-28 08:25:37',
                'function_name' => 'create',
            ),
            41 => 
            array (
                'id' => 61,
                'method' => 'post',
                'route' => 'types',
                'controller_name' => 'TypeController',
                'created_at' => '2018-01-28 08:25:38',
                'updated_at' => '2018-01-28 08:25:38',
                'function_name' => 'store',
            ),
            42 => 
            array (
                'id' => 62,
                'method' => 'get',
                'route' => 'types/{id}/edit',
                'controller_name' => 'TypeController',
                'created_at' => '2018-01-28 08:25:38',
                'updated_at' => '2018-01-28 08:25:38',
                'function_name' => 'edit',
            ),
            43 => 
            array (
                'id' => 63,
                'method' => 'patch',
                'route' => 'types/{id}',
                'controller_name' => 'TypeController',
                'created_at' => '2018-01-28 08:25:38',
                'updated_at' => '2018-01-28 08:25:38',
                'function_name' => 'update',
            ),
            44 => 
            array (
                'id' => 64,
                'method' => 'get',
                'route' => 'types/{id}/delete',
                'controller_name' => 'TypeController',
                'created_at' => '2018-01-28 08:25:38',
                'updated_at' => '2018-01-28 08:25:38',
                'function_name' => 'destroy',
            ),
            45 => 
            array (
                'id' => 65,
                'method' => 'post',
                'route' => 'sortabledatatable',
                'controller_name' => 'SettingController',
                'created_at' => '2018-01-28 09:22:00',
                'updated_at' => '2018-01-28 09:22:00',
                'function_name' => 'updateOrder',
            ),
            46 => 
            array (
                'id' => 66,
                'method' => 'get',
                'route' => 'buildroutes',
                'controller_name' => 'RouteController',
                'created_at' => '2018-01-28 09:23:55',
                'updated_at' => '2018-01-28 09:23:55',
                'function_name' => 'buildroutes',
            ),
            47 => 
            array (
                'id' => 69,
                'method' => 'get',
                'route' => 'delete_all',
                'controller_name' => 'DashboardController',
                'created_at' => '2018-02-04 12:01:23',
                'updated_at' => '2018-02-04 12:01:23',
                'function_name' => 'delete_all_index',
            ),
            48 => 
            array (
                'id' => 70,
                'method' => 'post',
                'route' => 'delete_all',
                'controller_name' => 'DashboardController',
                'created_at' => '2018-02-04 12:01:23',
                'updated_at' => '2018-02-04 12:01:23',
                'function_name' => 'delete_all_store',
            ),
            49 => 
            array (
                'id' => 71,
                'method' => 'get',
                'route' => 'upload_resize_v2',
                'controller_name' => 'DashboardController',
                'created_at' => '2018-02-04 13:02:56',
                'updated_at' => '2018-02-04 13:02:56',
                'function_name' => 'upload_resize_v2',
            ),
            50 => 
            array (
                'id' => 72,
                'method' => 'post',
                'route' => 'sortabledatatable',
                'controller_name' => 'UserController',
                'created_at' => '2018-02-05 13:39:22',
                'updated_at' => '2018-02-05 13:39:22',
                'function_name' => 'updateOrder',
            ),
            51 => 
            array (
                'id' => 79,
                'method' => 'get',
                'route' => 'setting',
                'controller_name' => 'SettingController',
                'created_at' => '2018-02-05 14:10:10',
                'updated_at' => '2018-02-05 14:10:10',
                'function_name' => 'index',
            ),
            52 => 
            array (
                'id' => 80,
                'method' => 'get',
                'route' => 'users',
                'controller_name' => 'UserController',
                'created_at' => '2018-05-31 09:42:21',
                'updated_at' => '2018-05-31 09:42:21',
                'function_name' => 'index',
            ),
            53 => 
            array (
                'id' => 81,
                'method' => 'get',
                'route' => 'users/new',
                'controller_name' => 'UserController',
                'created_at' => '2018-05-31 09:42:21',
                'updated_at' => '2018-05-31 09:42:21',
                'function_name' => 'create',
            ),
            54 => 
            array (
                'id' => 82,
                'method' => 'post',
                'route' => 'users',
                'controller_name' => 'UserController',
                'created_at' => '2018-05-31 09:42:21',
                'updated_at' => '2018-05-31 09:42:21',
                'function_name' => 'store',
            ),
            55 => 
            array (
                'id' => 83,
                'method' => 'get',
                'route' => 'users/{id}/edit',
                'controller_name' => 'UserController',
                'created_at' => '2018-05-31 09:42:21',
                'updated_at' => '2018-05-31 09:42:21',
                'function_name' => 'edit',
            ),
            56 => 
            array (
                'id' => 84,
                'method' => 'post',
                'route' => 'users/{id}/update',
                'controller_name' => 'UserController',
                'created_at' => '2018-05-31 09:42:21',
                'updated_at' => '2018-05-31 09:42:21',
                'function_name' => 'update',
            ),
        ));
        
        
    }
}

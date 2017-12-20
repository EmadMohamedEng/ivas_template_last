<?php 
 /*Generated Route File @iVAS*/ 
 
/*
|--------------------------------------------------------------------------

| Application Routes

|--------------------------------------------------------------------------

|

| Here is where you can register all of the routes for an application.

| It's a breeze. Simply tell Laravel the URIs it should respond to

| and give it the controller to call when that URI is requested.

|
*/
 
Route::group(['middleware'=>['auth','role:super_admin']], function () {
Routes::get('dashboard','DashboardController@index');
Routes::get('users','UserController@index');
Routes::post('users','UserController@store');
Routes::get('user_profile','UserController@profile');
Routes::post('user_profile/updatepassword','UserController@UpdatePassword');
Routes::post('user_profile/updateprofilepic','UserController@UpdateProfilePicture');
Routes::get('users/{id}/delete','UserController@destroy');
Routes::post('user_profile/updateuserdata','UserController@UpdateNameAndEmail');
Routes::get('users/{id}/edit','UserController@edit');
Routes::post('users/{id}/update','UserController@update');
Routes::get('static_translation','StaticTranslationController@index');
Routes::get('setting','SettingController@index');
Routes::get('setting/new','SettingController@create');
Routes::get('setting/{id}/delete','SettingController@destroy');
Routes::get('setting/{id}/edit','SettingController@edit');
Routes::post('setting/{id}/update','SettingController@update');
Routes::post('setting','SettingController@store');
Routes::get('file_manager','DashboardController@file_manager');
Routes::get('upload_items','DashboardController@multi_upload');
Routes::post('save_items','DashboardController@save_uploaded');
Routes::get('upload_resize','DashboardController@upload_resize');
Routes::post('save_image','DashboardController@save_image');
Routes::post('static_translation/{id}/update','StaticTranslationController@update');
Routes::get('static_translation/{id}/delete','StaticTranslationController@destroy');
Routes::get('language/{id}/delete','LanguageController@destroy');
Routes::post('language/{id}/update','LanguageController@update');
Routes::get('roles','RoleController@index');
Routes::get('roles/new','RoleController@create');
Routes::post('roles','RoleController@store');
Routes::get('roles/{id}/delete','RoleController@destroy');
Routes::get('roles/{id}/edit','RoleController@edit');
Routes::post('roles/{id}/update','RoleController@update');
Routes::get('language','LanguageController@index');
Routes::get('language/create','LanguageController@create');
Routes::post('language','LanguageController@store');
Routes::get('language/{id}/edit','LanguageController@edit');
Routes::get('routes','RouteController@index');
Routes::post('routes','RouteController@store');
Routes::get('routes/{id}/edit','RouteController@edit');
Routes::post('routes/{id}/update','RouteController@update');
Routes::get('routes/{id}/delete','RouteController@destroy');
Routes::get('routes/create','RouteController@create');
Routes::get('routes/index_v2','RouteController@index_v2');
Routes::get('roles/{id}/view_access','RoleController@view_access');
Routes::get('buildroutes','RouteController@buildroutes');
});

Routes::get('users/new','UserController @create');

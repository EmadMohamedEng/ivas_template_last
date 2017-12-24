<?php 
 /*Generated Route File @iVAS*/ 
 Mail : karim.ahmed@ivas.com.eg 
 
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
Route::get('dashboard','DashboardController@index');
Route::get('user_profile','UserController@profile');
Route::post('user_profile/updatepassword','UserController@UpdatePassword');
Route::post('user_profile/updateprofilepic','UserController@UpdateProfilePicture');
Route::get('users/{id}/delete','UserController@destroy');
Route::post('user_profile/updateuserdata','UserController@UpdateNameAndEmail');
Route::get('users/{id}/edit','UserController@edit');
Route::post('users/{id}/update','UserController@update');
Route::get('static_translation','StaticTranslationController@index');
Route::get('setting','SettingController@index');
Route::get('setting/new','SettingController@create');
Route::get('setting/{id}/delete','SettingController@destroy');
Route::get('setting/{id}/edit','SettingController@edit');
Route::post('setting/{id}/update','SettingController@update');
Route::post('setting','SettingController@store');
Route::get('file_manager','DashboardController@file_manager');
Route::get('upload_items','DashboardController@multi_upload');
Route::post('save_items','DashboardController@save_uploaded');
Route::get('upload_resize','DashboardController@upload_resize');
Route::post('save_image','DashboardController@save_image');
Route::post('static_translation/{id}/update','StaticTranslationController@update');
Route::get('static_translation/{id}/delete','StaticTranslationController@destroy');
Route::get('language/{id}/delete','LanguageController@destroy');
Route::post('language/{id}/update','LanguageController@update');
Route::get('roles','RoleController@index');
Route::get('roles/new','RoleController@create');
Route::post('roles','RoleController@store');
Route::get('roles/{id}/delete','RoleController@destroy');
Route::get('roles/{id}/edit','RoleController@edit');
Route::post('roles/{id}/update','RoleController@update');
Route::get('language','LanguageController@index');
Route::get('language/create','LanguageController@create');
Route::post('language','LanguageController@store');
Route::get('language/{id}/edit','LanguageController@edit');
Route::get('routes','RouteController@index');
Route::post('routes','RouteController@store');
Route::get('routes/{id}/edit','RouteController@edit');
Route::post('routes/{id}/update','RouteController@update');
Route::get('routes/{id}/delete','RouteController@destroy');
Route::get('routes/create','RouteController@create');
Route::get('routes/index_v2','RouteController@index_v2');
Route::get('roles/{id}/view_access','RoleController@view_access');
});
 

Route::get('users/new','UserController @create');

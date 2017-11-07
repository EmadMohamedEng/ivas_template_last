<?php

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

use Illuminate\Http\Request;

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Route::group(['middleware' => ['auth']], function() {
    Route::resource('dashboard', 'DashboardController');
    Route::get('/', 'DashboardController@index');

    Route::get('user_profile','UserController@profile');
    Route::post('user_profile/updatepassword','UserController@UpdatePassword');
    Route::post('user_profile/updateprofilepic','UserController@UpdateProfilePicture');
    Route::post('user_profile/updateuserdata','UserController@UpdateNameAndEmail');
});

Route::post('delete_multiselect',function (Request $request){
    if (strlen($request['selected_list'])==0)
    {
        \Session::flash('failed',\Lang::get('messages.custom-messages.no_selected_item'));
        return back();
    }
    delete_multiselect($request) ;
    return back();
});

Route::group(['middleware' => ['auth','role:super_admin']], function() {
    Route::get('users', 'UserController@index');
    Route::get('users/{id}/delete', 'UserController@destroy');
    Route::get('users/{id}/edit', 'UserController@edit');
    Route::post('users/{id}/update', 'UserController@update');
    Route::get('users/new', 'UserController@create');
    Route::post('users', 'UserController@store');

});
Route::group(['middleware'=> 'auth'], function() {
    Route::get('setting', 'SettingController@index');
    Route::get('setting/new', 'SettingController@create');
    Route::get('setting/{id}/delete', 'SettingController@destroy');
    Route::get('setting/{id}/edit', 'SettingController@edit');
    Route::post('setting/{id}/update', 'SettingController@update');
    Route::post('setting', 'SettingController@store');

    Route::get('file_manager','DashboardController@file_manager');
    
    Route::get('upload_items','DashboardController@multi_upload') ;
    Route::post('save_items','DashboardController@save_uploaded');
});
Route::group(['middleware' => ['auth','role:super_admin']], function() {
    Route::get('roles', 'RoleController@index');
    Route::get('roles/new', 'RoleController@create');
    Route::post('roles', 'RoleController@store');
    Route::get('roles/{id}/delete', 'RoleController@destroy');
    Route::get('roles/{id}/edit', 'RoleController@edit');
    Route::post('roles/{id}/update', 'RoleController@update');
});
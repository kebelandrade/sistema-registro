<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/empleados', 'App\Http\Controllers\EmpleadosController@index');
//Route::get('/empleados/create',
    //'App\Http\Controllers\EmpleadosController@create');

Route::resource('empleados', 'App\Http\Controllers\EmpleadosController')
    ->middleware('auth');

Auth::routes(['register' => false, 'reset' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin', 'App\Http\Controllers\Admin\AdminController@index');
Route::resource('admin/roles', 'App\Http\Controllers\Admin\RolesController');
Route::resource('admin/permissions', 'App\Http\Controllers\Admin\PermissionsController');
Route::resource('admin/users', 'App\Http\Controllers\Admin\UsersController');
Route::resource('admin/pages', 'App\Http\Controllers\Admin\PagesController');
Route::resource('admin/activitylogs', 'App\Http\Controllers\Admin\ActivityLogsController')->only([
    'index', 'show', 'destroy'
]);
Route::resource('admin/settings', 'App\Http\Controllers\Admin\SettingsController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

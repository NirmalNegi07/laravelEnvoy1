<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Artisan;

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
// routes/web.php
Route::get('/', 'EnvoyController@index')->name('welcome');
Route::post('/trigger-envoy', 'EnvoyController@triggerEnvoy')->name('trigger.envoy');




// Route::get('/setup-uat-project_a', function () {
//     Artisan::call('php vendor/bin/envoy run setup-uat-project_a');
//     return response()->json(['message' => 'UAT setup for Project A started']);
// });

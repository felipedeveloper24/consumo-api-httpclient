<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Termwind\Components\Dd;

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


Route::get('/', function (){
    
    $baseUrl = env("API_ENDPOINT");
    $response = Http::get($baseUrl);
    return($response->json());
} );

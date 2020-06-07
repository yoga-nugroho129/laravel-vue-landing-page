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
    $packagesData = [
        [
            'title' => 'bayi',
            'secPrice' => 19900,
            'mainPrice' => 14900,
            'users' => 938
        ],
        [
            'title' => 'pelajar',
            'secPrice' => 46000,
            'mainPrice' => 23450,
            'users' => 4168
        ],
        [
            'title' => 'personal',
            'secPrice' => 58900,
            'mainPrice' => 38900,
            'users' => 10017
        ],
        [
            'title' => 'bisnis',
            'secPrice' => 109000,
            'mainPrice' => 65900,
            'users' => 3552
        ]
    ];
    
    return view('welcome', ['packages' => $packagesData]);
});

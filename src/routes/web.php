<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dispositivos', function () {
    return view('dispositivos/listadodisp');
});
<?php

use Illuminate\Support\Facades\Route;
$estudiantes= [/*
    ['titulo' => 'Estudiante 01'],
    ['titulo' => 'Estudiante 02'],
    ['titulo' => 'Estudiante 03'],
    ['titulo' => 'Estudiante 04'],
    ['titulo' => 'Estudiante 05'],*/
    ];
    Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::get('estudiantes', 'App\Http\Controllers\EstudiantesController@index')->name('estudiantes.index');
Route::view('contacto', 'contacto')->name('contacto');
Route::get('estudiantes/crear', 'App\Http\Controllers\EstudiantesController@create')->name('estudiantes.create');
Route::get('estudiantes/{id}', 'App\Http\Controllers\EstudiantesController@show')->name('estudiantes.show');
Route::post('/estudiantes', 'App\Http\Controllers\EstudiantesController@store')->name('estudiantes.store');
Route::get('estudiantes', 'App\Http\Controllers\EstudiantesController@index')->name('estudiantes.index');
Route::get('personas/crear', 'App\Http\Controllers\personasController@create_personas')->name('personas.create_personas');
Route::get('personas/{id}', 'App\Http\Controllers\personasController@show')->name('personas.show');
Route::post('/personas', 'App\Http\Controllers\personasController@store')->name('personas.store');
Route::get('personas', 'App\Http\Controllers\personasController@index')->name('personas.index');

Route::post('/contacto', 'ContactController@store');

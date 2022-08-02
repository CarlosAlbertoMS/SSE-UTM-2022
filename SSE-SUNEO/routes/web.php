<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('Empresas')->group(function () {
    Route::get('/perfil-empresa', 'RegistroEmpresaController@view_perfil_empresa')->name('perfil-empresa');
    Route::get('/encuesta-de-satisfaccion', 'RegistroEmpresaController@view_encuesta_satisfaccion');
    Route::post('/create', 'RegistroEmpresaController@create')->name('Empresa.create');
    Route::post('/stored_encuesta', 'RegistroEmpresaController@stored_encuesta')->name('Empresa.stored_encuesta');
});
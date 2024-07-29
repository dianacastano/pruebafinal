<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;

// Rutas para gestionar equipos

Route::get('/', function () {
    return view('anadeequipo');
});

Route::post('/equipo/add', function () {
    $controller = new EquipoController();
    return $controller->addEquipo(request());
})->name('equipo.add');

Route::get('/equipo/add', function () {
    $controller = new EquipoController();
    return $controller->showAddForm();
})->name('equipo.addForm');






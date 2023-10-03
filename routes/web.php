<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/arreglo', function(){
    return [
        'nombre' => 'Pepito',
        'apellido' => 'Perez',
        'edad' => 20,
        'mascota' => [
            'nombre' => 'Firulais',
            'raza' => 'Pitbull'
        ]
    ];
});

Route::get('/test', function(){
    return view('test', [
        'titulo' => 'Hola Mundo',
        'descripcion' => 'Este es un texto de prueba',
        'paises' => [
            'Colombia',
            'Peru',
            'Ecuador',
            'Argentina',
            'Chile'
        ]
    ]);
});

Route::get('/test-controller', 
[\App\Http\Controllers\TestController::class, 'test'] 
);

Route::get('/test-db', 
[\App\Http\Controllers\TestController::class, 'testDB'] 
);

Route::resource(
    'cows', 
    App\Http\Controllers\CowController::class
);
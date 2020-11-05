<?php

use App\Http\Controllers\sendEmailController;
use App\Http\Controllers\usuarioController;
use App\Http\Resources\registrarUsuarioApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/registro', [usuarioController::class, 'registrar'])->name('registro');

//Route::post('/correoConfirmacion', [sendEmailController::class, 'contacto'])->name('correo');

Route::post('/correo', [usuarioController::class, 'sendEmail'])->name('correo');

Route::post('/contacto', [usuarioController::class, 'contacto'])->name('contacto');



/*Route::get('/api/registro/create', function (Request $request) {
    return [usuarioController::class, 'registroApi'];
})->name('registro');


Route::get('/api/registro/create2', function () {
    return [usuarioController::class, 'registroApi'];
})*/
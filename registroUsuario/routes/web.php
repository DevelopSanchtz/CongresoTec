<?php

use App\Http\Controllers\nombreController;
use App\Models\usuario;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\usuarioController;

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

Route::get('/usuarios', [usuarioController::class, 'index'])->name('usuariosJSON');

Route::get('/ola', [nombreController::class, 'nombreCorreo'])->name('olaxd');

Route::get('/pruebagmail', function () {
    return view('correoConfirmacion');
})->name('vistacorreo');

Route::get('/contacto', 'App\Http\Controllers\sendEmailController@contacto')->name('enviarCorreo');

Route::post('registro/create', [usuarioController::class, 'registroApi']);
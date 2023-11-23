<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RespuestaController;
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
    return view('paginas/dashboard');
})->name('Dashboard');

Route::get('/txt', function () {
    return view('paginas/TXT');
})->name('Txt');

Route::get('/Bts', function () {
    return view('paginas/BTS');
})->name('Bts');

Route::get('/Grupos', function () {
    return view('paginas/GRUPOS');
})->name('Grupos');

Route::get('/Artistas', function () {
    return view('paginas/ARTISTAS');
})->name('Artistas');

Route::get('/twice', function () {
    return view('paginas/TWICE');
})->name('Twice');

Route::get('/Nunu', function () {
    return view('paginas/NUNU');
})->name('Nunu');

Route::get('/chatbot', function () {
    return view('paginas/chatbot');
})->name('Chatbot');

Route::get('/chatbotcuerpo', function () {
    return view('paginas/cuerpochat');
})->name('Chatbotcuerpo');

Route::resource('preguntas', App\Http\Controllers\PreguntaController::class);
Route::resource('respuestas', App\Http\Controllers\RespuestaController::class);


Route::post('/respuestas/chat', [RespuestaController::class, 'chat'])->name('respuestas.chat');//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

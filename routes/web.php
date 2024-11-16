<?php

use App\Http\Controllers\RecordController;
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
    return view('welcome');
});


Route::get('/form', [RecordController::class, 'create'])->name('create.form');
Route::post('/store', [RecordController::class, 'store'])->name('store.record');
Route::get('/pdf/{id}', [RecordController::class, 'generatePDF'])->name('generate.pdf');

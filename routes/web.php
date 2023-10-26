<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/contattaci', [PublicController::class, 'contattaci'])->name('contattaci');

Route::get('/email-inviata', [PublicController::class, 'ringraziamenti'])->name('ringraziamenti');

Route::get('/prodotti', [PublicController::class, 'prodotti'])->name('prodotti');

Route::get('/chiSiamo', [PublicController::class, 'chiSiamo'])->name('chiSiamo');

Route::post('/contattaci/submit', [PublicController::class, 'contattaci_submit'])->name('contattaci_submit');

Route::post('/article', [PublicController::class, 'article'])->name('article');



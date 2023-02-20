<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Use_;
use App\Http\Controllers\ComicController as ComicController;

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

Route::get('/', [ComicController::class, 'index'])->name('comics_page');

Route::get('/singleComic/{id}', [ComicController::class, 'single'])->name('single_comic');
<?php

use App\Http\Controllers\Admin\MainController as MainAdminController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])
    ->name('home');
Route::get('/about', [MainController::class, 'about'])
    ->name('about');
Route::get('/blog', [MainController::class, 'blog'])
    ->name('blog');
Route::get('/careers', [MainController::class, 'careers'])
    ->name('careers');
Route::get('/contacts', [MainController::class, 'contacts'])
    ->name('contacts');
Route::get('/news', [MainController::class, 'news'])
    ->name('news');
Route::get('/portfolio', [MainController::class, 'portfolio'])
    ->name('portfolio');


/*
 * admin routes
 */
//Route::prefix('admin')->name('admin.')->middleware('admin')
Route::prefix('admin')->name('admin.')
    ->group(function() {

        Route::get('/', [MainAdminController::class, 'index'])->name('index');

    });
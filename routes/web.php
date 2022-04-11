<?php

use App\Http\Controllers\NewsFormController;
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

Route::get('/news', [NewsFormController::class, 'index'])->name('news_go');
Route::get('/news_sante_2', [NewsFormController::class, 'showSante2'])->name('news_sante_2');
Route::get('/news_info', [NewsFormController::class, 'showInfo'])->name('news_info');
Route::get('/news_people', [NewsFormController::class, 'showPeople'])->name('news_people');
Route::get('/news_sortir', [NewsFormController::class, 'showSortir'])->name('news_sortir');
Route::get('/news_voyagez', [NewsFormController::class, 'showVoyagez'])->name('news_voyagez');

/// form Route

Route::get('/NewsForm', [NewsFormController::class, 'createForm']);

Route::post('/NewsForm', [NewsFormController::class, 'NewsForm']);

/// edit route
Route::get('editshow','App\Http\Controllers\UpdateNewsController@index')->name('upd_show');;
// Route::get('edit/{id}','App\Http\Controllers\UpdateNewsController@show');
Route::post('edit/{id}','App\Http\Controllers\UpdateNewsController@editForm');

// back office
Route::get('/', [NewsFormController::class, 'indexOff'])->name('back_off');

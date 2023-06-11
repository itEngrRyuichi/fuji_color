<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PrintingController;
use App\Http\Controllers\PrintinglistController;
use App\Http\Controllers\OrderflowController;
use App\Http\Controllers\DataInsertController;
use App\Http\Controllers\FreequoteController;
use App\Http\Controllers\FalbardController;
use App\Http\Controllers\ScanningController;
use App\Http\Controllers\AchiveController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\PersonalController;

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

Route::get('/', [TopController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/mail', [MailController::class, 'index'])->name('mail');
Route::resource('/printing', PrintingController::class)->names(['index' => 'printing']);
Route::resource('/printinglist', PrintinglistController::class)->names(['index' => 'printinglist']);
Route::resource('/orderflow', OrderflowController::class)->names(['index' => 'orderflow']);
Route::resource('/datainsert', DataInsertController::class)->names(['index' => 'datainsert']);
Route::resource('/freequote', FreequoteController::class)->names(['index' => 'freequote']);
Route::resource('/falbard', FalbardController::class)->names(['index' => 'falbard']);
Route::resource('/scanning', ScanningController::class)->names(['index' => 'scanning']);
Route::resource('/achive', AchiveController::class)->names(['index' => 'achive']);
Route::resource('/question', QuestionController::class)->names(['index' => 'question']);
Route::resource('/personal', PersonalController::class)->names(['index' => 'personal']);

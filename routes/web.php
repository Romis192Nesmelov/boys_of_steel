<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\HockeyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurHeroesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TeamsController;
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

//Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/',HomeController::class)->name('home');
//    Route::get('/about_us', AboutUsController::class)->name('about_us');
    Route::get('/news/{slug?}', NewsController::class)->name('news');
    Route::get('/games/future', [ScheduleController::class, 'futureGames'])->name('games.future');
    Route::get('/games/past', [ScheduleController::class, 'pastGames'])->name('games.past');
    Route::get('/teams/{slug?}', TeamsController::class)->name('teams');
    Route::get('/sledge_hockey', [HockeyController::class, 'sledge'])->name('hockey.sledge');
    Route::get('/phygital_hockey', [HockeyController::class, 'phygital'])->name('hockey.phygital');
    Route::get('/our_heroes', OurHeroesController::class)->name('our_heroes');
    Route::get('/documents', DocumentsController::class)->name('documents');
//});

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

//require __DIR__.'/auth.php';

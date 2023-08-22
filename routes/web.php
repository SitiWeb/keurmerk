<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ChecklistController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/regenerate-api-key',  [UserController::class, 'regenerateApiKey'])->name('regenerate-api-key');

Route::resource('users', HomeController::class);
Route::resource('websites', WebsiteController::class);
Route::get('websites/checking/{website}', [ChecklistController::class, 'checking'])->name('websites.checking');
Route::post('/websites/checklist/{websites}', [ChecklistController::class, 'store'])->name('websites.checklist');



Route::get('sync-users', [UserController::class, 'syncUsers']);
Route::get('create-subscribtion/{website}', [UserController::class, 'createSub'])->name('create_sub');
Route::get('cancel-subscribtion/{website}', [UserController::class, 'cancelSub'])->name('cancel_sub');
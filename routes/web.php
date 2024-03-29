<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TroubleshootController;


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
    return view('auth.login');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//route resource
Route::resource('troubleshoot', TroubleshootController::class);
//Route::get('troubleshoot/index', [App\Http\Controllers\TroubleshootController::class, 'index'])->name('index');


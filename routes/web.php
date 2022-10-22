<?php

use App\Models\Cake;
use App\Models\Menu;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('landing', []);
})->name('landing')->middleware('auth');;

Route::get('/welcome', function () {
    return view('welcome', [
        "cakes" => Cake::all(),
        "menu" => Menu::all()
    ]);
})->middleware('auth');

Route::get('/login', function () {
    return view('login', [AuthController::class, 'loginView'], [
        'title' => 'Halaman Login'
    ]);
})->name('login');

Route::get('/register', function () {
    return view('register', [
    ]);
})->name('resgister');

Route::post(
    '/action-register',
    [AuthController::class, 'actionRegister']
);

Route::get('/login', [
    AuthController::class,
    'loginView'
])->name("login");

Route::post(
    '/action-login',
    [AuthController::class, 'actionLogin']
);

Route::get('/logout', [AuthController::class, 'logout']);
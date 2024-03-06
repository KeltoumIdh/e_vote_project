<?php

use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', function () {
    return view('app');
});
Route::get('/vote', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.index');
});
//candidats
Route::get('/admin/candidats', function () {
    return view('admin.candidat.index');
});
Route::get('/admin/candidats/add', function () {
    return view('admin.candidat.add');
});
//voters
Route::get('/admin/voters', function () {
    return view('admin.voters.index');
});
Route::get('/admin/voters/add', function () {
    return view('admin.voters.add');
});
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ElectionController;
use App\Models\Candidate;
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

Route::get('/', [ElectionController::class, 'index']);
Route::get('/vote', [CandidateController::class, 'getall']);
//
Route::get('/admin', function () {
    return view('admin.index');
});
//candidats
Route::get('/admin/candidats', [CandidateController::class, 'index']);
Route::group(['middleware' => 'web'], function () {
    Route::post('/candidats/add', [CandidateController::class, 'create']);
    Route::post('/candidats/edit/{id}', [CandidateController::class, 'edit']);
    Route::put('/candidats/update/{id}', [CandidateController::class, 'update']);
    Route::delete('/candidats/delete/{id}', [CandidateController::class, 'delete']);
});
Route::get('/admin/candidats/add', [CandidateController::class, 'getallelections']);
//voters
Route::get('/admin/voters', function () {
    return view('admin.voters.index');
});
Route::get('/admin/voters/add', function () {
    return view('admin.voters.add');
});

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
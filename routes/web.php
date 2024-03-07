<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ElectionController;
use App\Http\Controllers\VotesController;
use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
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




Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('app');
    // Route::get('/', [ElectionController::class, 'index'])->name('app');
    Route::get('/vote/{id}', [CandidateController::class, 'getall']);
    Route::post('/check-password',[VotesController::class, 'checkPassword'] )->name('checkPassword');
    Route::post('/add-vote', [VotesController::class, 'addVote']);

});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    //admin
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');
    //candidats
    Route::get('/admin/candidats', [CandidateController::class, 'index']);
    Route::group(['middleware' => 'web'], function () {
        Route::post('/candidats/add', [CandidateController::class, 'create']);
        Route::get('/candidats/edit/{id}', [CandidateController::class, 'edit']);
        Route::put('/candidats/update/{id}', [CandidateController::class, 'update']);
        Route::delete('/candidats/delete/{id}', [CandidateController::class, 'delete']);
    });
    Route::get('/admin/candidats/add', [CandidateController::class, 'getallelections']);
    //elections
    Route::get('/admin/elections', [ElectionController::class, 'index']);
    Route::group(['middleware' => 'web'], function () {
        Route::post('/elections/add', [ElectionController::class, 'create']);
        Route::get('/elections/edit/{id}', [ElectionController::class, 'edit']);
        Route::put('/elections/update/{id}', [ElectionController::class, 'update']);
        Route::delete('/elections/delete/{id}', [ElectionController::class, 'delete']);
    });
    Route::get('/admin/elections/add', [ElectionController::class, 'getallelections']);
    //voters
    Route::get('/admin/voters', function () {
        return view('admin.voters.index');
    });
    Route::get('/admin/voters/add', function () {
        return view('admin.voters.add');
    });
});
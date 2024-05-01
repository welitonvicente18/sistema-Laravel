<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ResponsavelController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('/admin/index');
})->middleware(['auth', 'verified'])->name('dashboard');

/**
 * Módulo Profile
 */
Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    Route::delete('/user/{id}/delete', [UserController::class, 'destroy'])->name('user.destroy');
});

// Route::prefix('aluno')->group(function () {
// });

/**
 * Módulo Aluno
 */
Route::get('/aluno', [AlunoController::class, 'index'])->name('aluno.index');
Route::get('/aluno/create', [AlunoController::class, 'create'])->name('aluno.create');
Route::post('/aluno', [AlunoController::class, 'store'])->name('aluno.store');
Route::get('/aluno/{id}/edit', [AlunoController::class, 'edit'])->name('aluno.edit');
Route::put('/aluno/{id}', [AlunoController::class, 'update'])->name('aluno.update');
Route::delete('/eluno/{id}/delete', [AlunoController::class, 'destroy'])->name('aluno.destroy');

/**
 * Módulo Responsavel
 */
Route::get('/responsavel', [ResponsavelController::class, 'index'])->name('responsavel.index');
Route::get('/novoresponsalvel', [ResponsavelController::class, 'create'])->name('responsavel.create');
Route::post('/responsavel', [ResponsavelController::class, 'store'])->name('responsavel.store');

require __DIR__ . '/auth.php';

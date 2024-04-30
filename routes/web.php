<?php

use App\Http\Controllers\ProfileController;
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
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/novo', [ProfileController::class, 'create'])->name('profile.create');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{$id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::prefix('aluno')->group(function () {
// });

/**
 * Módulo Aluno
 */
Route::get('/aluno', [AlunoController::class, 'index'])->name('aluno.index');
Route::get('/novoaluno', [AlunoController::class, 'create'])->name('aluno.create');
Route::post('/alunosalvar', [AlunoController::class, 'store'])->name('aluno.store');
Route::get('/aluno/{id}', [AlunoController::class, 'edit'])->name('aluno.edit');
Route::put('/aluno/{id}', [AlunoController::class, 'update'])->name('aluno.update');
Route::delete('/eluno/delete/{id}', [AlunoController::class, 'destroy'])->name('aluno.destroy');

/**
 * Módulo Responsavel
 */
Route::get('/responsavel', [ResponsavelController::class, 'index'])->name('responsavel.index');
Route::get('/novoresponsalvel', [ResponsavelController::class, 'create'])->name('responsavel.create');
Route::post('/responsavel', [ResponsavelController::class, 'store'])->name('responsavel.store');

require __DIR__ . '/auth.php';

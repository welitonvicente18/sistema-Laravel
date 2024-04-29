<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlunoController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::prefix('aluno')->group(function () {
// });
Route::get('/aluno', [AlunoController::class, 'index'])->name('aluno.index');
Route::get('/novoaluno', [AlunoController::class, 'create'])->name('aluno.create');
// dd($_REQUEST);
Route::post('/alunosalvar', [AlunoController::class, 'store'])->name('aluno.store');

require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CategoryController;
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

Route::get('/about/{id}',[AboutController::class,'index'])->name('about.index');

Route::get('/about/test',[AboutController::class,'test']);

Route::get('/form',[FormController::class,'index'])->name('form.index');
Route::get('/form/create',[FormController::class,'create'])->name('form.create');
Route::post('/form',[FormController::class,'store'])->name('form.store');
Route::delete('/form/{student}',[FormController::class,'destroy'])->name('form.destroy');
Route::get('/form/{student}/edit',[FormController::class,'edit'])->name('form.edit');
Route::put('/form/{student}',[FormController::class,'update'])->name('form.update');

Route::get('/post/trash',[PostController::class,'trash'])->name('post.trash');
Route::get('/post/restore/{id}',[PostController::class,'restore'])->name('post.restore');
Route::delete('/post/forceDelete/{id}',[PostController::class,'forceDelete'])->name('post.forceDelete');
Route::resource('/post',PostController::class);


Route::get('/file',[FileController::class,'index'])->name('file.index');
Route::post('/file',[FileController::class,'upload'])->name('file.upload');

Route::resource('category',CategoryController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

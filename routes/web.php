<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FileController;

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
// Route::get('/about/{id}', function($id){
    // return '關於我';
    // return view('about')->with(['id'=>$id,'msg'=>'hello']);
    // return view('about',['id'=>$id]);
    // return view('about',compact('id'));
// });

// Route::get('/about',[App\Http\Controllers\AboutController::class,'index']);
Route::get('/about/{id}',[AboutController::class,'index'])->name('about.index');

Route::get('/about/test',[AboutController::class,'test']);

Route::get('/form',[FormController::class,'index'])->name('form.index');
Route::get('/form/create',[FormController::class,'create'])->name('form.create');
Route::post('/form',[FormController::class,'store'])->name('form.store');
Route::delete('/form/{student}',[FormController::class,'destroy'])->name('form.destroy');
Route::get('/form/{student}/edit',[FormController::class,'edit'])->name('form.edit');
Route::put('/form/{student}',[FormController::class,'update'])->name('form.update');

Route::get('/post/trash',[PostController::class,'trash'])->name('post.trash');
Route::get('/post/restore/{post}',[PostController::class,'restore'])->name('post.restore');
Route::resource('/post',PostController::class);


Route::get('/file',[FileController::class,'index'])->name('file.index');
Route::post('/file',[FileController::class,'upload'])->name('file.upload');

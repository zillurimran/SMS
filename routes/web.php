<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/new-student',[HomeController::class,'save'])->name('new.student');
Route::get('/manage-student',[HomeController::class,'manage'])->name('manage.student');
Route::get('/add-dept',[HomeController::class,'addDept'])->name('add.dept');
Route::post('/manage-dept',[HomeController::class,'saveDept'])->name('manage.dept');
Route::get('/all-dept',[HomeController::class,'allDept'])->name('all.dept');



Route::get('/edit/{id}',[HomeController::class,'edit'])->name('edit');
Route::post('/update-student',[HomeController::class,'updateStudent'])->name('update.student');
Route::get('/edit-dept/{id}',[HomeController::class,'editDept'])->name('edit.dept');
Route::post('/update-dept',[HomeController::class,'updateDept'])->name('update.dept');

Route::post('/delete-student',[HomeController::class,'deleteStudent'])->name('delete.student');
Route::post('/delete-dept',[HomeController::class,'deleteDept'])->name('delete.dept');

//Route::get('/all-students',[HomeController::class,'showStudents'])->name('all.student');

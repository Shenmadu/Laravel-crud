<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Auth::routes();

Route::post ('/students/store',[StudentController::class,'store'])->name('Student.store');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get ('/students/show',[App\Http\Controllers\HomeController::class,'allStudents'])->name('view-all');


Route::get ('/students/show',[StudentController::class,'show'])->name('Student.show-all');

Route::get ('/students/{student_id}/edit',[StudentController::class,'edit'])->name('Student.edit');

Route::post ('/students/{student_id}/update',[StudentController::class,'update'])->name('Student.update');

Route::delete ('/students/{student}',[StudentController::class,'destroy'])->name('Student.destroy');
<?php

use App\Http\Controllers\TeacherController;
use App\Models\Teacher;

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});



Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');
Route::get('/teachers/{id}', [TeacherController::class, 'view'])->name('teachers.view');
Route::get('/teachers/{id}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
Route::patch('/teachers/{id}', [TeacherController::class, 'show'])->name('teachers.show');
Route::delete('/teachers/{id}', [TeacherController::class, 'destroy'])->name('teachers.destroy');

//Route::resource('/teachers' , TeacherController::class);




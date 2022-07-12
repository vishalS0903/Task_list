<?php
use App\Http\Controllers\TaskController;
use illuminate\Support\Facades\Route;

Route::get('/',[TaskController::class,'index'])->name('tasks.index');
Route::post('/task/create',[TaskController::class,'store'])->name('task.create');
Route::delete('/task/delete/{task}',[TAskController::class,'destroy'])->name('task.destroy');

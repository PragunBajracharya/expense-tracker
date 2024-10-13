<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ExpenseController;

Route::get('/expenses', [ExpenseController::class, 'index'])->name('expense.index');
Route::get('/expense/{id}/edit', [ExpenseController::class, 'edit'])->name('expense.edit');
Route::get('/expense/create', [ExpenseController::class, 'create'])->name('expense.create');
Route::post('/expense/{id}/update', [ExpenseController::class, 'update'])->name('expense.update');
Route::post('/expense/store', [ExpenseController::class, 'store'])->name('expense.store');
Route::post('/expense/delete/{id}', [ExpenseController::class, 'delete'])->name('expense.delete');

<?php

use App\Http\Controllers\Admin\ExpenseCategoryController;
use App\Http\Controllers\Admin\TrashController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ExpenseController;

Route::get('/expenses', [ExpenseController::class, 'index'])->name('expense.index');
Route::get('/expense/{id}/edit', [ExpenseController::class, 'edit'])->name('expense.edit');
Route::get('/expense/create', [ExpenseController::class, 'create'])->name('expense.create');
Route::post('/expense/{id}/update', [ExpenseController::class, 'update'])->name('expense.update');
Route::post('/expense/store', [ExpenseController::class, 'store'])->name('expense.store');
Route::delete('/expense/delete/{id}', [ExpenseController::class, 'delete'])->name('expense.delete');

Route::get('/expense-categories', [ExpenseCategoryController::class, 'index'])->name('expense-category.index');
Route::get('/expense-category/{id}/edit', [ExpenseCategoryController::class, 'edit'])->name('expense-category.edit');
Route::get('/expense-category/create', [ExpenseCategoryController::class, 'create'])->name('expense-category.create');
Route::post('/expense-category/{id}/update', [ExpenseCategoryController::class, 'update'])->name('expense-category.update');
Route::post('/expense-category/store', [ExpenseCategoryController::class, 'store'])->name('expense-category.store');
Route::delete('/expense-category/delete/{id}', [ExpenseCategoryController::class, 'delete'])->name('expense-category.delete');

Route::get('/trash', [TrashController::class, 'index'])->name('trash.index');
Route::get('/trash/restore/{id}', [TrashController::class, 'restore'])->name('trash.restore');
Route::post('/trash/delete/{id}', [TrashController::class, 'delete'])->name('trash.delete');

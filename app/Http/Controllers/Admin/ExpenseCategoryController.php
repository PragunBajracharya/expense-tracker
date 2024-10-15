<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Expense;
use App\Models\Admin\ExpenseCategory;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ExpenseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Application|Factory|View
    {
        $expenseCategories = ExpenseCategory::orderBy('id', 'desc')->get();
        return view('admin.expense-category.index', compact('expenseCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Application|Factory|View
    {
        return view('admin.expense-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        $category = ExpenseCategory::create($input);
        return redirect()->route('expense-category.edit', $category)->with('success', 'Expense created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Application|Factory|View
    {
        $category = ExpenseCategory::find($id);
        return view('admin.expense-category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $inputs = $request->all();
        $category = ExpenseCategory::find($id);
        $category->update($inputs);
        return redirect()->route('expense-category.edit', $category)->with('success', 'Expense updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id): RedirectResponse
    {
        $category = ExpenseCategory::find($id);
        $category->delete();
        return redirect()->route('expense-category.index')->with('success', 'Expense deleted successfully');
    }
}

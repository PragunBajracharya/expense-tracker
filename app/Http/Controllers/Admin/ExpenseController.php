<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Expense;
use App\Models\Admin\ExpenseCategory;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Application|Factory|View
    {
        $model = Expense::orderBy('id', 'desc')->get();
        return view('admin.expenses.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $expenseCategories = ExpenseCategory::all();
        return view('admin.expenses.create', compact('users', 'expenseCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $receipt = $request->file('receipt');
        $fileName = 'receipt_' . time();
        $filePath = $receipt->storeAs('', $fileName, 'image');
        $filePath = '/images/' . $filePath;
        $input['receipt'] = $filePath;
        $model = Expense::create($input);
        return redirect()->route('expenses.edit', $model)->with('success', 'Expense created successfully');
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
    public function edit(string $id)
    {
        return view('admin.expenses.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

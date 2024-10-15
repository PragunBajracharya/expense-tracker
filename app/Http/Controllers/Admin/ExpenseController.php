<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Expense;
use App\Models\Admin\ExpenseCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): Application|Factory|View
    {
        $input = $request->all();
        if (!empty($input['filter'])) {
            $validated = $request->validate([
                'filter' => 'date',
            ]);
            $filterDate = Carbon::parse($input['filter']);
            $expenses = Expense::whereDate('created_at' , "=", $filterDate)->orderBy('id', 'desc')->paginate(10);
        } else {
            $expenses = Expense::orderBy('id', 'desc')->paginate(10);
        }
        return view('admin.expenses.index', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Application|Factory|View
    {
        $users = User::all();
        $expenseCategories = ExpenseCategory::all();
        return view('admin.expenses.create', compact('users', 'expenseCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        $receipt = $request->file('receipt');
        $fileName = 'receipt_' . time();
        $filePath = $receipt->storeAs('', $fileName, 'image');
        $filePath = '/images/' . $filePath;
        $input['receipt'] = $filePath;
        $expense = Expense::create($input);
        return redirect()->route('expense.edit', $expense)->with('success', 'Expense created successfully');
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
        $expense = Expense::find($id);
        $users = User::all();
        $expenseCategories = ExpenseCategory::all();
        return view('admin.expenses.edit', compact('expense', 'users', 'expenseCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $input = $request->all();
        $input['expense_category_id'] = $input['category'];
        unset($input['category']);
        $receipt = $request->file('receipt');
        if ($receipt) {
            $fileName = 'receipt_' . time();
            $filePath = $receipt->storeAs('', $fileName, 'image');
            $filePath = '/images/' . $filePath;
            $input['receipt'] = $filePath;
        }
        $expense = Expense::findOrFail($id);
        $expense->update($input);
        return redirect()->route('expense.edit', $expense)->with('success', 'Expense updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id): RedirectResponse
    {
        $expense = Expense::find($id);
        $expense->delete();
        return redirect()->route('expense.index')->with('success', 'Expense deleted successfully');
    }
}

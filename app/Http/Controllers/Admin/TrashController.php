<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Expense;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function index(): Application|Factory|View
    {
        $expenses = Expense::onlyTrashed()->get();
        return view('admin.trash.index', compact('expenses'));
    }

    public function restore(string $id): RedirectResponse
    {
        $expense = Expense::onlyTrashed()->findOrFail($id);
        $expense->restore();
        return redirect()->route('expense.index')->with('success', 'Expense restored successfully');
    }

    public function delete(string $id): RedirectResponse{
        $expense = Expense::onlyTrashed()->findOrFail($id);
        $expense->forceDelete();
        return redirect()->route('expense.index')->with('success', 'Expense deleted successfully');
    }
}

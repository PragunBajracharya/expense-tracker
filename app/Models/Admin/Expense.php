<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expense extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'paid_by',
        'expense_category_id',
        'amount',
        'receipt',
        'remarks',
        'status'
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'paid_by');
    }

    public function expenseCategory(): HasOne{
        return $this->hasOne(ExpenseCategory::class, 'id', 'expense_category_id');
    }
}

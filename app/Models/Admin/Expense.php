<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'paid_by',
        'expense_category_id',
        'amount',
        'receipt',
        'remarks',
        'status'
    ];
}

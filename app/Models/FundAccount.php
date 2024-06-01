<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundAccount extends Model
{
    use HasFactory;

    protected $fillable = ["date", "invoice_id", "receipt_account_id", "payment_account_id", "debit", "credit"];
}

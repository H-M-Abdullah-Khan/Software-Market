<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseRequest extends Model
{
    use HasFactory;

    protected $fillable = ['buyer_id', 'software_name', 'amount', 'status'];

    public function approvals()
    {
        return $this->hasMany(Approval::class);
    }
}

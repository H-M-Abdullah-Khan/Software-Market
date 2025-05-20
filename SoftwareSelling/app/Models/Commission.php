<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SoftwareProduct;

class Commission extends Model
{
    use HasFactory;
    protected $table = 'commisions';
    protected $fillable = [
        'software_product_id',
        'user_id',
        'commission_rate',
    ];

    public function softwareProduct()
    {
        return $this->belongsTo(SoftwareProduct::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

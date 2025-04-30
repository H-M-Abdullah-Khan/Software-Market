<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'software_id',
        'order_date',
        'total_amount',
        'status',
        'invoice',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function software()
    {
        return $this->belongsTo(softwareproduct::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function download()
    {
        return $this->hasOne(SoftwareDownload::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareDownload extends Model
{
    use HasFactory;

    protected $table = 'software_downloads';

    protected $fillable = [
        'order_id',
        'software_id',
        'downloaded_at',
        'download_link',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function software()
    {
        return $this->belongsTo(softwareproduct::class);
    }
}


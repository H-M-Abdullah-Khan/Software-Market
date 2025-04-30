<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareAnalytics extends Model
{
    use HasFactory;

    protected $table = 'software_analytics';

    protected $fillable = [
        'software_id',
        'downloads',
        'views',
    ];

    public function software()
    {
        return $this->belongsTo(softwareproduct::class);
    }
}

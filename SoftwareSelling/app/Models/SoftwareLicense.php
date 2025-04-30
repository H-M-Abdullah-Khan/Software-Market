<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareLicense extends Model
{
    use HasFactory;

    protected $table = 'software_licenses';

    protected $fillable = [
        'software_id',
        'license_key',
        'expiration_date',
    ];

    public function software()
    {
        return $this->belongsTo(softwareproduct::class);
    }
}

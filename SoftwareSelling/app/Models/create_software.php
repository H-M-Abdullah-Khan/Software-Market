<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class SoftwareProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'category',
        'pricing_type',
        'price',
        'main_file',
        'screenshots',
        'demo_url',
        'detected_language',
        'malware_detected',
        'ai_scan_summary',
        'status',
        'admin_feedback',
        'is_active',
    ];

    protected $casts = [
        'screenshots' => 'array',
        'malware_detected' => 'boolean',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
    ];

    /**
     * Get the user who submitted the software.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Customize fields to be indexed by Laravel Scout / Meilisearch.
     */
    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'category' => $this->category,
            'pricing_type' => $this->pricing_type,
            'detected_language' => $this->detected_language,
            'status' => $this->status,
        ];
    }
}


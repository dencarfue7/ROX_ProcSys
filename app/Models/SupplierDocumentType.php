<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SupplierDocumentType extends Model
{
    protected $fillable = [
        'code',
        'name',
        'description',
        'is_required',
        'requires_expiry',
        'is_active',
    ];

    protected $casts = [
        'is_required' => 'boolean',
        'requires_expiry' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function documents(): HasMany
    {
        return $this->hasMany(SupplierDocument::class);
    }
}

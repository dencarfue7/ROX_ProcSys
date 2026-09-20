<?php

namespace App\Models;

use App\Enums\SupplierDocumentStatus;
use App\Enums\SupplierType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    protected $fillable = [
        'supplier_code',
        'business_name',
        'trade_name',
        'supplier_type',
        'business_structure',
        'tin',
        'philgeps_number',
        'philgeps_expiry_date',
        'contact_person',
        'position',
        'email',
        'phone',
        'mobile',
        'address',
        'barangay',
        'city',
        'province',
        'region',
        'postal_code',
        'website',
        'status',
        'is_blacklisted',
        'blacklist_date',
        'blacklist_reason',
        'remarks',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'supplier_type' => SupplierType::class,
        'status' => SupplierDocumentStatus::class,
        'philgeps_expiry_date' => 'date',
        'blacklist_date' => 'date',
        'is_blacklisted' => 'boolean',
    ];

    public function documents(): HasMany
    {
        return $this->hasMany(SupplierDocument::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}

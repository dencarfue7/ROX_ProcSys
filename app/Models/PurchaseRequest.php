<?php

namespace App\Models;

use App\Enum\PurchaseRequestStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PurchaseRequest extends Model
{
    protected $fillable = [
        'pr_number',
        'user_id',
        'office_id',
        'fund_source_id',
        'request_date',
        'project',
        'purpose',
        'status',
        'total_amount',
        'remarks',
        'submitted_at',
        'approved_at',
        'approved_by',
    ];

    protected $casts = [
        'status' => PurchaseRequestStatus::class,
        'request_date' => 'date',
        'submitted_at' => 'datetime',
        'approved_at' => 'datetime',
        'total_amount' => 'decimal:2',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }

    public function fundSource(): BelongsTo
    {
        return $this->belongsTo(FundSource::class);
    }

    public function approver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function items(): HasMany
    {
        return $this->hasMany(PurchaseRequestItem::class);
    }
}

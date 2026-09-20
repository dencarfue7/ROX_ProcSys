<?php

namespace App\Models;

use App\Enums\SupplierDocumentStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SupplierDocument extends Model
{
    protected $fillable = [
        'supplier_id',
        'supplier_document_type_id',
        'document_number',
        'issue_date',
        'expiry_date',
        'file_path',
        'original_filename',
        'mime_type',
        'file_size',
        'status',
        'remarks',
        'uploaded_by',
        'verified_by',
        'verified_at',
    ];

    protected $casts = [
        'status' => SupplierDocumentStatus::class,
        'issue_date' => 'date',
        'expiry_date' => 'date',
        'verified_at' => 'datetime',
    ];

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function documentType(): BelongsTo
    {
        return $this->belongsTo(
            SupplierDocumentType::class,
            'supplier_document_type_id'
        );
    }

    public function uploader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    public function verifier(): BelongsTo
    {
        return $this->belongsTo(User::class, 'verified_by');
    }
}

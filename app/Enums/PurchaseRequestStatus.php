<?php

namespace App\Enum;

enum PurchaseRequestStatus: string
{
    case DRAFT = 'draft';
    case SUBMITTED = 'submitted';
    case FOR_REVIEW = 'for_review';
    case RETURNED = 'returned';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
    case FOR_PROCUREMENT = 'for_procurement';
    case COMPLETED = 'completed';
    case CANCELLED = 'cancelled';

    public function label(): string
    {
        return match ($this) {
            self::DRAFT => 'Draft',
            self::SUBMITTED => 'Submitted',
            self::FOR_REVIEW => 'For Review',
            self::RETURNED => 'Returned',
            self::APPROVED => 'Approved',
            self::REJECTED => 'Rejected',
            self::FOR_PROCUREMENT => 'For Procurement',
            self::COMPLETED => 'Completed',
            self::CANCELLED => 'Cancelled',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::DRAFT => 'gray',
            self::SUBMITTED => 'info',
            self::FOR_REVIEW => 'warning',
            self::RETURNED => 'warning',
            self::APPROVED => 'success',
            self::REJECTED => 'danger',
            self::FOR_PROCUREMENT => 'primary',
            self::COMPLETED => 'success',
            self::CANCELLED => 'gray',
        };
    }

}

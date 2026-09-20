<?php

namespace App\Enums;

enum SupplierType: string
{
    case MANUFACTURER = 'manufacturer';
    case DISTRIBUTOR = 'distributor';
    case SUPPLIER = 'supplier';
    case CONTRACTOR = 'contractor';
    case SERVICE_PROVIDER = 'service_provider';
    case CONSULTANT = 'consultant';
    case OTHER = 'other';

    public function label(): string
    {
        return match ($this) {
            self::MANUFACTURER => 'Manufacturer',
            self::DISTRIBUTOR => 'Distributor',
            self::SUPPLIER => 'Supplier',
            self::CONTRACTOR => 'Contractor',
            self::SERVICE_PROVIDER => 'Service Provider',
            self::CONSULTANT => 'Consultant',
            self::OTHER => 'Other',
        };
    }
}

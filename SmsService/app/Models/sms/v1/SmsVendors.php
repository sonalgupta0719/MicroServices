<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SmsVendors extends Model
{
    use HasFactory;

    public function SmsVendors(): HasMany
    {
        return $this->hasMany(SmsVendorAccounts::class,'vendor_id');
    }

    public function SmsVendorsSmsVendorResponses(): HasMany
    {
        return $this->hasMany(SmsVendorResponses::class,'vendor_id');
    }
}

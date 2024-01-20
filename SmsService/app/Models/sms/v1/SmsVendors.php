<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SmsVendors extends Model
{
    use HasFactory;

    /**
     * one-to-many relationship with SmsVendorAccounts.
     */
    public function sms_vendor_account()
    {
        return $this->hasMany(SmsVendorAccounts::class,'vendor_id');
    }

    /**
     * one-to-many relationship with SmsVendorResponses.
     */
    public function sms_vendor_response()
    {
        return $this->hasMany(SmsVendorResponses::class,'vendor_id');
    }
}

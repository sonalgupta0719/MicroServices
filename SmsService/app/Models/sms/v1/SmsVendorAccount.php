<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SmsVendorAccount extends Model
{
    use HasFactory;

    /**
     * many-to-one relationship with SmsVendors.
     */
    public function sms_vendor()
    {
        return $this->belongsTo(SmsVendor::class);
    }

    /**
     * one-to-many relationship with SmsTemplateAccounts.
     */
    public function sms_template_account()
    {
        return $this->hasMany(SmsTemplateAccount::class,'vendor_account_id');
    }
    
    /**
     * one-to-many relationship with SmsLogs.
     */
    public function sms_log()
    {
        return $this->hasMany(SmsLog::class,'vendor_account_id');
    }
}

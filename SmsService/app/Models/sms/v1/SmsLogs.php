<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsLogs extends Model
{
    use HasFactory;

    /**
     * many-to-one relationship with SmsVendorAccounts.
     */
    public function sms_vendor_account()
    {
        return $this->belongsTo(SmsVendorAccounts::class);
    }

    /**
     * many-to-one relationship with SmsTemplates.
     */
    public function sms_template()
    {
        return $this->belongsTo(SmsTemplates::class);
    }

    /**
     * many-to-one relationship with SmsRequests.
     */
    public function sms_request()
    {
        return $this->belongsTo(SmsRequests::class);
    }
}

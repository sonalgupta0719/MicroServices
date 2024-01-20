<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsLog extends Model
{
    use HasFactory;

    /**
     * many-to-one relationship with SmsVendorAccounts.
     */
    public function sms_vendor_account()
    {
        return $this->belongsTo(SmsVendorAccount::class);
    }

    /**
     * many-to-one relationship with SmsTemplates.
     */
    public function sms_template()
    {
        return $this->belongsTo(SmsTemplate::class);
    }

    /**
     * many-to-one relationship with SmsRequests.
     */
    public function sms_request()
    {
        return $this->belongsTo(SmsRequest::class);
    }
}

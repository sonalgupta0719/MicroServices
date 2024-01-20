<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsTemplateAccount extends Model
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
     * many-to-one relationship with SmsSenders.
     */
    public function sms_sender()
    {
        return $this->belongsTo(SmsSender::class);
    }
}

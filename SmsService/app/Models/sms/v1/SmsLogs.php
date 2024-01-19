<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsLogs extends Model
{
    use HasFactory;

    public function SmsVendorAccounts()
    {
        return $this->belongsTo(SmsVendorAccounts::class);
    }

    public function SmsTemplates()
    {
        return $this->belongsTo(SmsTemplates::class);
    }

    public function SmsRequests()
    {
        return $this->belongsTo(SmsRequests::class);
    }
}

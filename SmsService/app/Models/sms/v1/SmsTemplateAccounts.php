<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsTemplateAccounts extends Model
{
    use HasFactory;

    public function SmsVendorAccounts()
    {
        return $this->belongsTo(SmsVendorAccounts::class);
    }

    public function SmsSenders()
    {
        return $this->belongsTo(SmsSenders::class);
    }
}

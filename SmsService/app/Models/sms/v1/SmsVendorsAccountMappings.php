<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsVendorsAccountMappings extends Model
{
    use HasFactory;

    public function Organizations()
    {
        return $this->belongsTo(Organizations::class);
    }

    public function Products()
    {
        return $this->belongsTo(Products::class);
    }

    public function SmsVendorAccounts()
    {
        return $this->belongsTo(SmsVendorAccounts::class);
    }
}

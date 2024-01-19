<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SmsVendorAccounts extends Model
{
    use HasFactory;

    public function SmsVendorAccounts()
    {
        return $this->belongsTo(SmsVendors::class);
    }

    public function SmsVendorsAccountsSmsVendorsAccountMappings(): HasMany
    {
        return $this->hasMany(SmsVendorsAccountMappings::class,'vendor_account_id');
    }

    public function SmsVendorsAccountsSmsTemplateAccounts(): HasMany
    {
        return $this->hasMany(SmsTemplateAccounts::class,'vendor_account_id');
    }
    
    public function SmsVendorsAccountsSmsLogs(): HasMany
    {
        return $this->hasMany(SmsLogs::class,'vendor_account_id');
    }
}

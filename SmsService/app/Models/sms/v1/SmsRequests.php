<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SmsRequests extends Model
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
    
    public function SmsTemplates()
    {
        return $this->belongsTo(SmsTemplates::class);
    }

    public function SmsRequestsSmsLogs(): HasMany
    {
        return $this->hasMany(SmsLogs::class,'request_id');
    }
}

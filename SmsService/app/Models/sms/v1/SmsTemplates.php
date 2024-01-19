<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SmsTemplates extends Model
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

    public function SmsTemplatesSmsRequests(): HasMany
    {
        return $this->hasMany(SmsRequests::class,'template_id');
    }
    
    public function SmsTemplatesSmsLogs(): HasMany
    {
        return $this->hasMany(SmsLogs::class,'template_id');
    }
}

<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SmsTemplates extends Model
{
    use HasFactory;

    /**
     * many-to-one relationship with Organizations.
     */
    public function organization()
    {
        return $this->belongsTo(Organizations::class);
    }

    /**
     * many-to-one relationship with Products.
     */
    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    /**
     * one-to-many relationship with SmsRequests.
     */
    public function sms_request()
    {
        return $this->hasMany(SmsRequests::class,'template_id');
    }
    
    /**
     * one-to-many relationship with SmsLogs.
     */
    public function sms_log()
    {
        return $this->hasMany(SmsLogs::class,'template_id');
    }
}

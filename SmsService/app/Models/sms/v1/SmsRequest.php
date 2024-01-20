<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SmsRequest extends Model
{
    use HasFactory;

    /**
     * many-to-one relationship with Organizations.
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    /**
     * many-to-one relationship with Products.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    /**
     * many-to-one relationship with SmsTemplates.
     */
    public function sms_template()
    {
        return $this->belongsTo(SmsTemplate::class);
    }

    /**
     * one-to-many relationship with SmsLogs.
     */
    public function sms_log()
    {
        return $this->hasMany(SmsLog::class,'request_id');
    }
}

<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SmsSenders extends Model
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
     * one-to-many relationship with SmsTemplateAccounts.
     */
    public function sms_template_account()
    {
        return $this->hasMany(SmsTemplateAccounts::class,'sender_id');
    }

}

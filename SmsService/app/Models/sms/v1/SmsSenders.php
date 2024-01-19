<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SmsSenders extends Model
{
    use HasFactory;

    public function Organizations()
    {
        return $this->belongsTo(Organizations::class);
    }

    public function SmsSendersSmsTemplateAccounts(): HasMany
    {
        return $this->hasMany(SmsTemplateAccounts::class,'sender_id');
    }

}

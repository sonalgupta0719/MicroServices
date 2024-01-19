<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsVendorResponses extends Model
{
    use HasFactory;

    public function SmsVendorResponses()
    {
        return $this->belongsTo(SmsVendors::class);
    }
}

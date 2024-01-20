<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsVendorResponses extends Model
{
    use HasFactory;

    /**
     * many-to-one relationship with SmsVendors.
     */
    public function sms_vendor()
    {
        return $this->belongsTo(SmsVendors::class);
    }
}

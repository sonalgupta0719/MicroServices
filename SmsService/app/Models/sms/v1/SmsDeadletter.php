<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsDeadletter extends Model
{
    use HasFactory;

    /**
     * many-to-one relationship with Products.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

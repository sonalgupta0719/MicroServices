<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsDeadletter extends Model
{
    use HasFactory;

    public function Products()
    {
        return $this->belongsTo(Products::class);
    }
}

<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
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
}

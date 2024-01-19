<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;

    public function Organizations()
    {
        return $this->belongsTo(Organizations::class);
    }

    public function ProductsUsers(): HasMany
    {
        return $this->hasMany(Users::class,'product_id');
    }

    public function ProductsSmsVendorsAccountMappings(): HasMany
    {
        return $this->hasMany(SmsVendorsAccountMappings::class,'product_id');
    }
    
    public function ProductsSmsTemplates(): HasMany
    {
        return $this->hasMany(SmsTemplates::class,'product_id');
    }
    
    public function ProductsSmsDeadletter(): HasMany
    {
        return $this->hasMany(SmsDeadletter::class,'product_id');
    }
    
    public function ProductsSmsRequests(): HasMany
    {
        return $this->hasMany(SmsRequests::class,'product_id');
    }
}

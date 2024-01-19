<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organizations extends Model
{
    use HasFactory;

    //public function Organizations(): HasMany it is a function name it can be any thing

    public function OrganizationsProducts(): HasMany
    {
        return $this->hasMany(Products::class,'organization_id');
    }

    public function OrganizationsUsers(): HasMany
    {
        return $this->hasMany(Users::class,'organization_id');
    }

    public function OrganizationsSmsVendorsAccountMappings()
    {
        return $this->hasMany(SmsVendorsAccountMappings::class);
    }
    
    public function OrganizationsSmsTemplates()
    {
        return $this->hasMany(SmsTemplates::class);
    }
    
    public function OrganizationsSmsSenders()
    {
        return $this->hasMany(SmsSenders::class);
    }
    
    public function OrganizationsSmsRequests()
    {
        return $this->hasMany(SmsRequests::class);
    }
}

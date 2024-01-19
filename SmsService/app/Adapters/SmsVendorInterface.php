<?php 
// app/Interfaces/DatabaseAdapterInterface.php

namespace App\Adapters;

interface SmsVendorInterface
{
   public function sendSms($phoneNumber, $message);
}

<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SmsService;

use App\Adapters\TwoFactorAdapter;
use App\Adapters\ValueFirstAdapter;

class SmsController extends Controller
{
    // public function get($sms_id)
    // {
    //     return $sms_id;
    // }
        
    protected $smsVendor;

    // public function __construct(SmsService $smsVendor)
    // {
    //     $this->smsVendor = $smsVendor;
    // }


    // $a = class

    public function sendSms()
    {
        // return "kjhgfddsd";

        $phoneNumber = 9967346319;
        $message = "hzgdtfsd";

        $fileLogger = new TwoFactorAdapter();
        $a = $fileLogger->sendSms($message,$phoneNumber);
        // $result = $this->smsVendor->sendSms($phoneNumber, $message);

        return response()->json(['result' => $a]);
    }
    
}

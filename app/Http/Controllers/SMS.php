<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Http\Requests\SendSMSFormRequest;
use ISMS;
use Response;
use Input;

class SMS extends Controller {

    public function getSendSMS() {
        return view('send_sms');
    }
    
    public function postSendSMS(SendSMSFormRequest $request){
        
        ISMS::SendSMS(Input::get('message_recipient'), Input::get('message_content'), Input::get('message_type'));
        return view('send_sms')->with('success', 'SMS Sent Successfully');;
    }

}

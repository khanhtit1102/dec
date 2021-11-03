<?php

namespace App\Http\Controllers;

use App\Mail\LienHe;
use App\Mail\YeuCauTuVan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function tvts(Request $request) {
        //Validate
        $request->validate([
            'tvtsten'  => 'required|string',
            'tvtssdt'   => 'required|string',
            'tvtsnganh' => 'nullable',
            'tvtsdiachi'=> 'nullable'
        ]);
        $clientIP = $_SERVER['HTTP_CLIENT_IP'] 
                    ?? $_SERVER["HTTP_CF_CONNECTING_IP"] # when behind cloudflare
                    ?? $_SERVER['HTTP_X_FORWARDED'] 
                    ?? $_SERVER['HTTP_X_FORWARDED_FOR'] 
                    ?? $_SERVER['HTTP_FORWARDED'] 
                    ?? $_SERVER['HTTP_FORWARDED_FOR'] 
                    ?? $_SERVER['REMOTE_ADDR'] 
                    ?? '0.0.0.0';
        
        $data = $request->only(['tvtsten','tvtssdt','tvtsnganh','tvtsdiachi']);
        $data['ipaddress'] = 'https://whatismyipaddress.com/ip/' . $clientIP;
        //Send 
        Mail::to('khanhnh@tnu.edu.vn')->send(new YeuCauTuVan($data));

        return redirect()->route('home')->with('message','Cảm ơn bạn quan tâm đến chương trình ! Chúng tôi sẽ trả lời sớm nhất có thể.');
    }
    public function contact(Request $request) {
        //Validate
        $request->validate([
            'name'      => 'required|string',
            'phone'     => 'required|string',
            'message'   => 'required|string',
        ]);
        //Send 
        Mail::to('khanhnh@tnu.edu.vn')->send(new LienHe($request->only(['name','phone','message'])));

        return redirect()->route('contact')->with('message','Cảm ơn bạn liên hệ! Chúng tôi sẽ trả lời sớm nhất có thể.');   
    }
}

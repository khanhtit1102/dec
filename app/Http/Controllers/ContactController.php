<?php

namespace App\Http\Controllers;

use App\Mail\LienHe;
use App\Mail\YeuCauTuVan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function tvts(Request $request) {
        //TO-DO: làm sau TCĐ
        return redirect()->route('home')->with('message','Cảm ơn bạn quan tâm đến chương trình ! Chúng tôi sẽ trả lời sớm nhất có thể.');
    }
    public function contact(Request $request) {
        //TO-DO: làm sau TCĐ
        return redirect()->route('contact')->with('message','Cảm ơn bạn liên hệ! Chúng tôi sẽ trả lời sớm nhất có thể.');   
    }
}

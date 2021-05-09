<?php

namespace App\Http\Controllers\Admin;

use App\SubjectKey;
use willvincent\Feeds\Facades\FeedsFacade;
use Illuminate\Support\Str;

class UsefulNewsController extends PostController
{
    public $_type = 'usefulnews';
    public $_post_type = 'usefulnews';

    public function checkNewspaper() {
        $sk = SubjectKey::where('published',1)->get()->pluck('subject_key')->all();
        $pageToCrawl = [
            'https://dantri.com.vn/giao-duc-huong-nghiep.rss',
            'https://dantri.com.vn/khoa-hoc-cong-nghe.rss',
            'https://vnexpress.net/rss/giao-duc.rss',
            'https://vnexpress.net/rss/khoa-hoc.rss',
            'https://vietnamnet.vn/rss/giao-duc.rss',
            'https://vietnamnet.vn/rss/cong-nghe.rss',
            'https://thanhnien.vn/rss/giao-duc.rss',
            'https://thanhnien.vn/rss/cong-nghe.rss',
            'https://tuoitre.vn/rss/giao-duc.rss',
            'https://tuoitre.vn/rss/nhip-song-so.rss',
            'https://tuoitre.vn/rss/khoa-hoc.rss',
            'https://www.doisongphapluat.com/rss/cong-nghe.rss',
            'https://www.doisongphapluat.com/rss/giao-duc.rss',
            'https://giaoducthoidai.vn/rss/gdtd.rss',
            'https://giaoducthoidai.vn/rss/giao-duc.rss',
            'https://giaoducthoidai.vn/rss/khoa-hoc.rss',
            'https://giaoducthoidai.vn/rss/cong-nghe.rss',
            'https://vtc.vn/rss/giao-duc.rss',
            'https://vtc.vn/rss/khoa-hoc-cong-nghe.rss',
        ];
        
        $feed = FeedsFacade::make($pageToCrawl,1000,true);
        $data = $feed->get_items();
        $items = [];
        foreach ($data as $key => $value) {
            if(Str::of($value->get_description())->lower()->contains($sk) || Str::of($value->get_title())->lower()->contains($sk)) {
                array_push($items,$value);
            }
        }
        return view('admin.usefulnews.browse',compact('items'));
    }
}

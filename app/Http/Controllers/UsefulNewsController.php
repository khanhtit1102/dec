<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectKey;
use DOMDocument;
use DOMXPath;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use willvincent\Feeds\Facades\FeedsFacade;

class UsefulNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

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
        
        $feed = FeedsFacade::make($pageToCrawl,1,true);
        $data = $feed->get_items();
        $items = [];
        foreach ($data as $key => $value) {
            // if(Str::of($value->get_description())->lower()->contains($sk) || Str::of($value->get_title())->lower()->contains($sk)) {
                    $tmp = Http::get($value->get_permalink())->body();
                    $tmp = $this->exactData($tmp);
                    if($tmp)
                        echo '<div><a href="'.$value->get_permalink().'">'.$value->get_title().'</a>'.$tmp.'</div><hr />';
            // }
        }
        
        
    }

    public function exactData($res) {
        
        $dom = new DomDocument();
        @ $dom->loadHTML($res);
        $dom->preserveWhiteSpace = false;
        return $dom->C14N();
        $val = $dom->getElementById('abody');
        if($val)
            return $val->C14N();
    }
}

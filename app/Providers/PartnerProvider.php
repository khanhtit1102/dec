<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Partner;
use App\Post;
use Illuminate\Support\Facades\DB;

class PartnerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['classic.khaigiang','admin.settings.settings'], function ($view) {
            $khaigiang = DB::table('settings')->first();
            $view->with('khaigiang',$khaigiang);
        });
        View::composer('classic.doitac', function ($view) {
            $doitac = Partner::where('published',1)->get();
            $view->with('doitac',$doitac);
        });
        View::composer('classic.news', function ($view) {
            $news = Post::with('post_details')->where('category_id','=','3')->where('is_featured',0)->latest()->paginate(10);
            $view->with('news',$news);
            $featurednews = Post::with('post_details')->where('is_featured',1)->orderBy('ordering','desc')->latest()->paginate(16);
            $view->with('featurednews',$featurednews);
        });
        View::composer('classic.thongtinsuutam', function ($view) {
            $ttsts = Post::with('post_details')->where('post_type','=','collect')->latest()->paginate(10);
            $view->with('ttsts',$ttsts);
        });
        view()->composer('classic.sidebar', function ($view) {
            $news = Post::with('post_details')->where('category_id','=','3')->latest()->paginate(10);
            $noti = Post::with('post_details')->where('category_id','=','2')->latest()->paginate(10);
            $view->with('news',$news)->with('noti',$noti);
        });
    }
}

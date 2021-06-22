<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard(Request $request) {
        $this->authorize('viewDashboard',User::class);
        return view('admin.dashboard');
    }
    public function settings(Request $request) {
        $this->authorize('viewDashboard',User::class);
        return view('admin.settings.settings');
    }
    public function updateSettings(Request $request) {
        $khaigiang_HN   = $request->get('khaigiang_HN');
        $khaigiang_HCM  = $request->get('khaigiang_HCM');
        DB::table('settings')->delete();
        DB::table('settings')->insert(['khaigiang_HN'=>$khaigiang_HN,'khaigiang_HCM'=>$khaigiang_HCM]);
        return redirect()->route('admin.settings');
    }
}

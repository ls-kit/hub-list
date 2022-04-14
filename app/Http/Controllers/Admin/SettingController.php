<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingUpdateRrequest;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.setting.index');
    }

    /**
     * Store a newly created resource in storage. 
     *
     * @return \Illuminate\Http\Response
     */
    public function update( SettingUpdateRrequest $request)
    {
    //    dd($request->all());
        $setting = \App\Setting::first();
        $setting->update($request->all());

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = 'logo' . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('images'), $logoName);
            $setting->logo = $logoName;
        }
        if($request->hasFile('fevicon')){
            $favicon = $request->file('fevicon');
            $feviconName= 'favicon' . '.' . $favicon->getClientOriginalExtension();
            $favicon->move(public_path('images'), $feviconName);
            $setting->fevicon = $feviconName;
        }
        if($request->banner){
            $banner = $request->banner;
            $bannerName = 'banner' . '.' . $banner->getClientOriginalExtension();
            $banner->move(public_path('images'), $bannerName);
            $setting->banner = $bannerName;
        }
        $setting->save();
        return redirect()->route('admin.setting.index');
    }
}

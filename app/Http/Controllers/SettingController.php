<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::get()->first();
        return view('admin.setting.generel_setting', compact('setting'));
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
        $site_title = $request->site_title;
        $currency = $request->currency;
        $currency_symbol = $request->currency_symbol;
        $timezone = $request->timezone;
        $base_color = $request->base_color;
        $secondary_color = $request->secondary_color;

        Setting::create([
            'site_title' => $site_title,
            'currency' => $currency,
            'currency_symbol' => $currency_symbol,
            'timezone' => $timezone,
            'base_color' => $base_color,
            'secondary_color' => $secondary_color,
        ]);
        $notification = [
            'message' => "Setting Updated",
            'type' => 'success',

        ];
        return redirect()->back()->with($notification);
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
    public function update(Request $request)
    {
        $site_title = $request->site_title;
        $currency = $request->currency;
        $currency_symbol = $request->currency_symbol;
        $timezone = $request->timezone;
        $base_color = $request->base_color;
        $secondary_color = $request->secondary_color;

        Setting::where('id', 1)->update([
            'site_title' => $site_title,
            'currency' => $currency,
            'currency_symbol' => $currency_symbol,
            'timezone' => $timezone,
            'base_color' => $base_color,
            'secondary_color' => $secondary_color,
        ]);
        $notification = [
            'message' => "Setting Updated",
            'type' => 'success',

        ];
        return redirect()->back()->with($notification);
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
}

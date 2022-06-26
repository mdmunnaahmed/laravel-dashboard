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

        $title = $setting->site_title;
        $array = explode("#", $title);
        $inject = '<span>' . $array[1] . '</span>';
        $site_title = $setting->site_title = $array[0] . $inject . $array[2];

        return view('admin.setting.generel_setting', compact('setting', 'site_title', 'title'));
    }

    public function logoIndex()
    {
        $setting = Setting::get()->first();
        return view('admin.setting.logo_favicon', compact('setting'));
    }

    public function logoUpload(Request $request)
    {
        $request->validate([
            'logo' => 'image|mimes:jpg,jpeg,png',
            'darkLogo' => 'image|mimes:jpg,jpeg,png',
            'favicon' => 'image|mimes:png',
        ]);
        if ($request->file('logo')) {
            $logo = $request->file('logo');
            $logoFile = hexdec(uniqid()) . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('admin/img'), $logoFile);
        }
        if ($request->file('darkLogo')) {
            $logoDark = $request->file('darkLogo');
            $logoDarkFile = hexdec(uniqid()) . '.' . $logoDark->getClientOriginalExtension();
            $logoDark->move(public_path('admin/img/'), $logoDarkFile);
        }
        if ($request->file('favicon')) {
            $favicon = $request->file('favicon');
            $faviconFile = hexdec(uniqid()) . '.' . $favicon->getClientOriginalExtension();
            $favicon->move(public_path('admin/img/'), $faviconFile);
        }

        if ($request->hasFile('logo')) {
            Setting::where('id', 1)->update([
                'logo' => $logoFile,
            ]);
            $notification = [
                'message' => 'Logo Uploaded',
                'type' => 'success'
            ];
        }
        if ($request->hasFile('darkLogo')) {
            Setting::where('id', 1)->update([
                'darkLogo' => $logoDarkFile,
            ]);
            $notification = [
                'message' => 'Logo Dark Uploaded',
                'type' => 'success'
            ];
        }
        if ($request->hasFile('favicon')) {
            Setting::where('id', 1)->update([
                'favicon' => $faviconFile,
            ]);
            $notification = [
                'message' => 'Favicon Uploaded',
                'type' => 'success'
            ];
        }
        return redirect()->back()->with($notification);
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

        $agree_policy = $request->agree_policy;
        if ($request->agree_policy == 'on') {
            $agree_policy = 1;
        } else {
            $agree_policy = 0;
        }

        $user_registration = $request->user_registration;
        if ($request->user_registration == 'on') {
            $user_registration = 1;
        } else {
            $user_registration = 0;
        }

        $email_verification = $request->email_verification;
        if ($request->email_verification == 'on') {
            $email_verification = 1;
        } else {
            $email_verification = 0;
        }

        $email_notification = $request->email_notification;
        if ($request->email_notification == 'on') {
            $email_notification = 1;
        } else {
            $email_notification = 0;
        }

        Setting::create()([
            'site_title' => $site_title,
            'currency' => $currency,
            'currency_symbol' => $currency_symbol,
            'timezone' => $timezone,
            'base_color' => $base_color,
            'secondary_color' => $secondary_color,

            'agree_policy' => $agree_policy,
            'user_registration' => $user_registration,
            'email_verification' => $email_verification,
            'email_notification' => $email_notification,
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

        $agree_policy = $request->agree_policy;
        if ($request->agree_policy == 'on') {
            $agree_policy = 1;
        } else {
            $agree_policy = 0;
        }

        $user_registration = $request->user_registration;
        if ($request->user_registration == 'on') {
            $user_registration = 1;
        } else {
            $user_registration = 0;
        }

        $email_verification = $request->email_verification;
        if ($request->email_verification == 'on') {
            $email_verification = 1;
        } else {
            $email_verification = 0;
        }

        $email_notification = $request->email_notification;
        if ($request->email_notification == 'on') {
            $email_notification = 1;
        } else {
            $email_notification = 0;
        }

        Setting::where('id', 1)->update([
            'site_title' => $site_title,
            'currency' => $currency,
            'currency_symbol' => $currency_symbol,
            'timezone' => $timezone,
            'base_color' => $base_color,
            'secondary_color' => $secondary_color,

            'agree_policy' => $agree_policy,
            'user_registration' => $user_registration,
            'email_verification' => $email_verification,
            'email_notification' => $email_notification,
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

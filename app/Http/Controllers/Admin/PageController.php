<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function aboutUs()
    {
        $setting = Setting::find(1);

        return view('Admin.Page.about', compact('setting'));
    }

    public function saveAboutUs(Request $request)
    {
        $request->validate([
            "about_us" => "required",
        ]);

        $setting = Setting::find(1);
        $setting->about_us = $request->about_us;
        $setting->update();

        Session::flash("message", "About Us Updated Successfully!");
        return redirect()->back();
    }

    public function contactUs()
    {
        $setting = Setting::find(1);

        return view('Admin.Page.contact_us', compact('setting'));
    }

    public function updateContactUs(Request $request)
    {
        $request->validate([
            "contact_number" => "required",
            "contact_email" => "required",
            "address" => "required",
        ]);

        $setting = Setting::find(1);
        $setting->contact_number = $request->contact_number;
        $setting->contact_email = $request->contact_email;
        $setting->address = $request->address;
        $setting->update();

        Session::flash("message", "Contact Detail Updated Successfully!");
        return redirect()->back();
    }
}

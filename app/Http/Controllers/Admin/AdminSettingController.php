<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class AdminSettingController extends Controller
{
    public function index()
    {
        $settings = Setting::where('id',1)->first();
        return view('admin.settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $obj = Setting::where('id', 1)->first();
    
        $request->validate([
            'top_bar_phone' => [
                'required',
                'regex:/^(?:\+?88)?01[3-9]\d{8}$/',
            ],
            'top_bar_email' => 'nullable|string|email|max:255',
            'footer_phone' => [
                'required',
                'regex:/^(?:\+?88)?01[3-9]\d{8}$/',
            ],
            'footer_email' => 'nullable|string|email|max:255',
            'footer_address' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'pinterest' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'copyright_text' => 'required|string|max:255',
            'theme_color_1' => 'nullable|string|max:255',
            'theme_color_2' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'favicon' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        if ($request->hasFile('logo')) {
            $logoPath = public_path('uploads/' . $obj->logo);
            if (file_exists($logoPath)) {
                unlink($logoPath);
            }
    
            $logo = $request->file('logo');
            $logoExtension = $logo->getClientOriginalExtension();
            $logoName = 'logo.' . $logoExtension;
            $logo->move(public_path('uploads/'), $logoName);
            $obj->logo = $logoName;
        }
    
        if ($request->hasFile('favicon')) {
            $faviconPath = public_path('uploads/' . $obj->favicon);
            if (file_exists($faviconPath)) {
                unlink($faviconPath);
            }
    
            $favicon = $request->file('favicon');
            $faviconExtension = $favicon->getClientOriginalExtension();
            $faviconName = 'favicon.' . $faviconExtension;
            $favicon->move(public_path('uploads/'), $faviconName);
            $obj->favicon = $faviconName;
        }
    
        $obj->fill($request->only([
            'top_bar_phone',
            'top_bar_email',
            'footer_phone',
            'footer_email',
            'footer_address',
            'facebook',
            'twitter',
            'linkedin',
            'pinterest',
            'instagram',
            'copyright_text',
            'theme_color_1',
            'theme_color_2',
        ]));
    
        $obj->update();
    
        return redirect()->back()->with('success', 'Data is updated successfully.');
    }
}
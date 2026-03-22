<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function theme()
    {
        $themeMode = Setting::where('key', 'theme_mode')->first()->value ?? 'light';
        return view('admin.settings.theme', compact('themeMode'));
    }

    public function updateTheme(Request $request)
    {
        $request->validate([
            'theme_mode' => 'required|in:light,dark',
        ]);

        Setting::updateOrCreate(['key' => 'theme_mode'], ['value' => $request->theme_mode]);

        return redirect()->back()->with('success', 'Theme settings updated successfully.');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        $settings = Setting::all();
        return view('admin.setting.index',compact('settings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
        ]);

        // Generate unique filename based on current timestamp
        $imageName = time().'.'.$request->file('image')->extension();

        // Store the image in 'public/images' directory with the generated filename
        $imagePath = $request->file('image')->storeAs('images', $imageName, 'public');

        $setting = new Setting();
        $setting->title = $request->input('title');
        $setting->description = $request->input('description');
        $setting->image = $imagePath; // Simpan path gambar ke database

        $setting->save();

        return response()->json($setting); // Response dengan data setting yang baru disimpan
    }


}

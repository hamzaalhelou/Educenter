<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Rawilk\Settings\Facades\Settings;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');

    }
    public function profile()
    {
        return view('admin.profile');
    }
    public function update(Request $request)
    {
    $user = Auth::user();

    $request->validate([
        'name' =>
            'required',
            'name',
            Rule::unique('users', 'name')->ignore($user->id),
        'email' =>
            'required',
            'email',
            Rule::unique('users', 'email')->ignore($user->id),
    ]);

    $user->update([
        'name' => $request->name,
        'email' => $request->email,
    ]);

    return redirect()->route('admin.profile')->with('success',__('admin.Profile data has been updated successfully'));
    }

    public function settings()
    {
        Gate::authorize('settings');
        return view('admin.settings');
    }
    public function settings_data(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_feature' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fb_link' => 'required',
            'tw_link' => 'required',
            'in_link' => 'required',
            'gm_link' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $fb_link = $request->fb_link;
        $tw_link = $request->tw_link;
        $in_link = $request->in_link;
        $gm_link = $request->gm_link;
        $address = $request->address;
        $phone=$request->phone;
        $logo = $request->file('logo')->store('uploads/images');
        $image_feature = time() . rand() . $request->file('image_feature')->getClientOriginalName();
        $request->file('image_feature')->move(public_path('uploads/images'));

        settings([
            'fb_link' => $fb_link,
            'tw_link' => $tw_link,
            'in_link' => $in_link,
            'gm_link' => $gm_link,
            'address' => $address,
            'phone'=>$phone,
            'logo' => $logo,
            'image_feature' => $image_feature,
        ]);

        return redirect()->back()->with('success', 'added successfully');
    }

}

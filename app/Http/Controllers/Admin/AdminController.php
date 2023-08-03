<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    public function settings()
    {
        return view('admin.settings');
    }
    public function settings_data(Request $request)
    {

        $fb_link = $request->fb_link;
        $tw_link = $request->tw_link;
        $in_link = $request->in_link;
        $gm_link = $request->gm_link;
        $address = $request->address;
        $logo = time() . rand() . $request->file('logo')->getClientOriginalName();
        $request->file('logo')->move(public_path('uploads/images'));

        settings([
            'fb_link' => $fb_link,
            'tw_link' => $tw_link,
            'in_link' => $in_link,
            'gm_link' => $gm_link,
            'address' => $address,
            'logo' => $logo,
        ]);

        return redirect()->back();
    }

}

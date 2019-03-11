<?php

namespace App\Http\Controllers;

use Auth;
use DB;

use App\Settings;

use Illuminate\Http\Request;

class SettingsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        return view('settings.overview');
    }

    public function profile() {
        $user = Auth::user();
        return view('settings.overview',compact('user',$user));
    }

    public function update_avatar(Request $request) {

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('avatars',$avatarName);

        $user->avatar = $avatarName;
        $user->save();

        return back()
            ->with('success','You have successfully uploaded image.');

    }

    public function upload(REQUEST $request) {

        $image = $request->file('image');
        //$input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
        $input['imagename'] = Auth::user()->name.'-profile.png';
        $destinationPath = public_path('images/avatars/');
        $image->move($destinationPath, $input['imagename']);

        // udpate the settings table to include the url to the image
        $url = new Settings([
            'image'     => $destinationPath . '/' . $input['imagename'], 
            'user_id'   => Auth::user()->id, 
            
        ]);
        $url->save();


        // DB::table('settings')
        //     ->where('user_id', '=', Auth::user()->id)
        //     ->updateOrInsert(
        //         ['image' => $destinationPath . '/' . $input['imagename']]
        // );

        return redirect()
            ->route('settings.overview')
            ->with('info', 'Good news, we uploaded your profile image');

    }

}

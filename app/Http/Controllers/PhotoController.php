<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use app\Models\User;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $admin_data = User::find($id);
        return view('admin.profile', compact('admin_data'));
    }

    public function dashboardIndex()
    {
        $id = Auth::user()->id;
        $admin_data = User::find($id);
        return view('admin.dashboard', compact('admin_data'));
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
        //
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


    public function edit()
    {
        $id = Auth::user()->id;
        $profile_edit_data = User::find($id);
        return view('admin.profile.edit', compact('profile_edit_data'));
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
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        // dd($data);
        if ($request->file('profile_upload')) {
            $file = $request->file('profile_upload');
            $fileMainName = explode(".", $file->getClientOriginalName());
            $fileExt = "." . $fileMainName[count($fileMainName) - 1];
            $filename = "profile" . $id . $fileExt;
            $file->move(public_path('admin/img/author/'), $filename);

            $data['profile_img'] = $filename;
        }
        $data->save();
        $message = array(
            'message' => "Profile Successfully Updated",
            'type' => 'success',
        );
        return redirect()->route('admin.profile')->with($message);
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


    public function updatePass(Request $request)
    {
        $validate = $request->validate([
            'old_pass' => 'required',
            'new_pass' => 'required | min:6 |max:16',
            'confirm_pass' => 'required | same:new_pass',
        ]);

        $oldHash = Auth::user()->password;
        if (Hash::check($request->old_pass, $oldHash)) {
            $user = User::find(Auth::id());
            $user->password = bcrypt($request->new_pass);
            $user->save();

            session()->flash("message", 'Password Updated Successfully');
            return redirect()->back();
        } else {
            session()->flash("message", 'Password did\'t match');
            return redirect()->back();
        }
    }
}

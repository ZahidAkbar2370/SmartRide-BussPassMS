<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pass;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function reportPass() {

        $pass = Pass::whereBetween('created_at', [now(), now()])->get();

        return view('Admin.Pass.report_pass', compact('pass'));
    }

    public function search(Request $request)
    {
        $from = $request->from_date;
        $to = $request->to_date;
        $passes = Pass::whereBetween('created_at', [$from, $to])->get();

        return view('Admin.Pass.report_pass', compact('passes'));
    }

    public function changePassword()
    {
        return view('Admin.Setting.change_password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            "new_password" => "required",
        ]);

        $user = User::where("id", Auth::user()->id)->first();
        $user->password = Hash::make($request->new_password);
        $user->update();

        Session::flash("message", "Password Updated Successfully!");
        return redirect()->back();
    }

    public function profile()
    {
        return view("Admin.Setting.profile");
    }

    public function updateProfile(Request $request)
    {
        $id = Auth::user()->id ?? 1;

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        Session::flash("message", "Profile Updated Successfully!");
        return redirect()->back();
    }
}

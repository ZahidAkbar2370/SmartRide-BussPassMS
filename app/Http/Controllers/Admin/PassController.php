<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Pass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $categories = Category::all();

        return view("Admin.Pass.create_pass", [
            'categories' => $categories
        ]);
    }
    
    public function save(Request $request)
    {
        $pass = new Pass();
        $pass->pass_number  = rand(1000,900000) + time();
        $pass->full_name  = $request->full_name;
        $pass->profile_image  = $request->profile_image;
        $pass->contact_number  = $request->contact_number;
        $pass->email  = $request->email;
        $pass->cnic_no  = $request->cnic_no;
        $pass->category  = $request->category;
        $pass->destination  = $request->destination;
        $pass->from_location  = $request->from_location;
        $pass->from_date  = $request->from_date;
        $pass->to_date  = $request->to_date;
        $pass->cost  = $request->cost;
        $pass->save();
        
        Session::flash("message", "Pass Created Successfully!");
        return redirect("admin/view-passes");
    }

    public function index()
    {
        $passes = Pass::orderBy("id", "DESC")->get();

        return view("Admin.Pass.view_passes", compact('passes'));
    }

    public function edit($id)
    {
        $pass = Pass::find($id);
        $categories = Category::all();

        return view("Admin.Pass.edit_pass",[
            "pass" => $pass,
            "categories" => $categories,
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->id;

        $pass = Pass::find($id);
        $pass->full_name  = $request->full_name;
        // $pass->profile_image  = $request->profile_image;
        $pass->contact_number  = $request->contact_number;
        $pass->email  = $request->email;
        $pass->cnic_no  = $request->cnic_no;
        $pass->category  = $request->category;
        $pass->destination  = $request->destination;
        // $pass->from_date  = $request->from_date;
        // $pass->to_date  = $request->to_date;
        $pass->cost  = $request->cost;
        $pass->save();
        
        Session::flash("message", "Pass Created Successfully!");
        return redirect("admin/view-passes");
    }

    public function destroy($id)
    {
        Pass::find($id)->delete();

        Session::flash("message", "Pass Deleted Successfully!");
        return redirect()->back();
    }

    public function show($id)
    {
        $pass = Pass::find($id);

        return view('Admin.Pass.view_pass_detail', compact('pass'));
    }
}

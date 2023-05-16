<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view("Admin.Category.create_category");
    }
    
    public function save(Request $request)
    {
        $request->validate([
            "category_name" => "required",
        ]);

        $category = new Category();
        $category->category_name  = $request->category_name;
        $category->save();
        
        Session::flash("message", "Category Created Successfully!");
        return redirect("admin/view-categories");
    }

    public function index()
    {
        $categories = Category::all();

        return view("Admin.Category.view_categories", compact('categories'));
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view("Admin.Category.edit_category",[
            "category" => $category,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            "id" => "required",
            "category_name" => "required",
        ]);

        $id = $request->id;

        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->update();

        Session::flash("message", "Category Updated Successfully!");
        return redirect("admin/view-category");
    }

    public function destroy($id)
    {
        Category::find($id)->delete();

        Session::flash("message", "Category Deleted Successfully!");
        return redirect()->back();
    }
}

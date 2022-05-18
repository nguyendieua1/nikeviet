<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\catygory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category = catygory::all();
        return view('admin.category.index', compact('category'));
    }
    public function add(){
        return view('admin.category.addcategory');
    }
    public function insert(Request  $request){
        $category = new catygory();
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category',$filename);
            $category->image = $filename;
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->desciption = $request->input('desciption');
        $category->status = $request->input('status') == TRUE ? '1': '0';
        $category->popular = $request->input('popular') == TRUE ? '1': '0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->meta_descipt = $request->input('meta_descipt');

        $category->save();
        return redirect('/category')->with('status','add category successfully');
    }
}

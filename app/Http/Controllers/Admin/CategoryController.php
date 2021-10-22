<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use File;
use Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addcategory()
    {
        $active='addcategory';
        return view('Admin.addcategory',compact('active'));
    }
    public function allcategory()
    {
        $active='allcategory';
        $category = Category::all();
        return view('Admin.allcategory',compact('category','active'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'image' => 'file|required',
            'status' => 'required',
        ]);
        if($validator->fails()){
            return back()->with("error", $validator->errors());
        }
        Category::create([
            'name' => $request->name,
            'image' => $request->image->store('Category/Images','public'),
            'status' => $request->status,
            'description' => $request->description,
        ]);
        return back()->with("success", "Category Added Successfully !");
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active='editcategory';
        $category = Category::find($id);
        return view('Admin.editcategory',compact('category','active'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'status' => 'required',
        ]);
        if($validator->fails()){
            return back()->with("error", $validator->errors());
        }
        $data = Category::find($id);
        $pic = $data->image;
        if($request->image){
            if(File::exists("storage/".$pic)) {
                File::delete("storage/".$pic);
            }
            Category::where('id', $id)->update([
                'name' => $request->name,
                'image' => $request->image->store('Category/Images','public'),
                'status' => $request->status,
                'description' => $request->description,
            ]); 
            return redirect()->route('all.category')->with("success", "Category Updated Successfully !");
        }else{
            Category::where('id', $id)->update([
                'name' => $request->name,
                'status' => $request->status,
                'description' => $request->description,
            ]); 
            return redirect()->route('all.category')->with("success", "Category Updated Successfully !");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Category::where('id', '=', $id)->first();
        $pic = $data->image;
        if (File::exists("storage/" . $pic)) {
            File::delete("storage/" . $pic);
        }
        $data->delete();
        return redirect()->route('all.category')->with("error", "Category Deleted Successfully !");
    }
}

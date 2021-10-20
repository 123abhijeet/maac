<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addcategory()
    {
        return view('Admin.addcategory');
    }
    public function allcategory()
    {
        $category = Category::all();
        return view('Admin.allcategory',compact('category'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'image' => 'file|required',
            'status' => 'required',
            'description' => 'max:200',
        ]);
        Category::create([
            'name' => $request->name,
            'image' => $request->image->store('Category/Images','public'),
            'status' => $request->status,
            'description' => $request->description,
        ]);
        return redirect()->back()->with("success", "Category Added Successfully !");
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('Admin.editcategory',compact('category'));
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

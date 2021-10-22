<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use File;
use Validator;
use DB;

class SubcategoryController extends Controller
{
    public function addsubcategory()
    {
        $active='addsubcategory';
        $category = Category::all();
        return view('Admin.addsubcategory',compact('active','category'));
    }
    public function allsubcategory()
    {
        $active='allsubcategory';
        $subcategory = Subcategory::join('categories', 'subcategories.category_id', '=', 'categories.id')
               ->get(['subcategories.*', 'categories.*']);
        return view('Admin.allsubcategory',compact('subcategory','active'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subcategory_name' => 'required',
            'image' => 'file',
            'status' => 'required',
        ]);
        if($validator->fails()){
            return back()->with("error", $validator->errors());
        }
            if($request->image == NULL)
            {
                Subcategory::create([
                    'category_id' => $request->category_id,
                    'subcategory_name' => $request->subcategory_name,
                    'status' => $request->status,
                    'description' => $request->description,
                ]);
                return back()->with("success", "Sub Category Added Successfully !");
            }else{
                Subcategory::create([
                    'category_name' => $request->category_name,
                    'subcategory_name' => $request->subcategory_name,
                    'image' => $request->image->store('Subcategory/Images','public'),
                    'status' => $request->status,
                    'description' => $request->description,
                ]);
                return back()->with("success", "Sub Category Added Successfully !");
            }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active='editsubcategory';
        $category = Category::all();
        $subcategory = Subcategory::find($id);
        return view('Admin.editsubcategory',compact('category','subcategory','active'));
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
        // $validator = Validator::make($request->all(), [
        //     'category_name' => 'required',
        //     'subcategory_name' => 'required',
        //     'image' => 'file',
        //     'status' => 'required',
        // ]);
        // if($validator->fails()){
        //     return back()->with("error", $validator->errors());
        // }
        $data = Subcategory::where('id','=',$id)->first();
        $pic = $data->image;
        if($request->image){
            if(File::exists("storage/".$pic)) {
                File::delete("storage/".$pic);
            }
            Subcategory::where('id', $id)->update([
                'category_id' => $request->category_id,
                'subcategory_name' => $request->subcategory_name,
                'image' => $request->image->store('Subcategory/Images','public'),
                'status' => $request->status,
                'description' => $request->description,
            ]); 
            return redirect()->route('all.subcategory')->with("success", "Subcategory Updated Successfully !");
        }else{
            Subcategory::where('id', $id)->update([
                'category_id' => $request->category_id,
                'subcategory_name' => $request->subcategory_name,
                'status' => $request->status,
                'description' => $request->description,
            ]); 
            return redirect()->route('all.subcategory')->with("success", "Subcategory Updated Successfully !");
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
        $data = Subcategory::where('id', '=', $id)->first();
        $pic = $data->image;
        if (File::exists("storage/" . $pic)) {
            File::delete("storage/" . $pic);
        }
        $data->delete();
        return redirect()->route('all.subcategory')->with("error", "Subcategory Deleted Successfully !");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function product_registration()
    {
        return view('product_registration');

    }
    public function product_reg(Request $request)
    {
    $request->validate([
    'product_name'=>'required',
    'image'=>'mimes:jpeg,jpg,png,gif|max:2048',
    'product_details'=>'required',
    'product_price'=>'required',
    
   ]);
   $data=$request->all();
   $path='asset/storage/images/'.$data['image'];
   $fileName=time().$request->file('image')->getclientoriginalName();
   $PATH=$request->file('image')->storeAs('images',$fileName,'public');
   $datas["image"]='/storage/'.$path;
   $data['image']=$fileName;
   $data['status']=0;
   Product::create($data);
   return redirect()->route('product_registration')->with('success',' Product Registered Successfully');
     
  }
  public function edit($id)
  {
     $data=Product::find($id);
     return view('adminedit_products',compact('data'));
  }

    public function product_update(Request $request,$id)
  {
    $data=Product::find($id);
    
    $request->validate([
    
    'image'=>'mimes:jpg,jpeg,jif,png|max:2048'
     

   ]);
   $data->product_name=$request->input('product_name');
   $data->product_details=$request->input('product_details');
   $data->product_price=$request->input('product_price');
  
   if($request->hasfile('image'))
   {
    $path='asset/storage/images/'.$data['image'];
    if(File::exists($path))
    {
      File::delete($path);
    }
     $fileName=time().$request->file('image')->getclientoriginalName();
     $path=$request->file('image')->storeAs('images',$fileName,'public');
     $datas["images"]='/storage/' .$path;
     $data->image=$fileName;
     $data->update();

    }
    $data->update();
    return redirect()->route('adminview_products')->with('success','updated succesfully');
  }
}

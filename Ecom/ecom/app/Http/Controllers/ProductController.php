<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Subcategory;
use App\Order;
use App\User;
class ProductController extends Controller
{
   public function index(){
      $products = Product::latest()->get();
      return view('admin.product.index',compact('products'));
   }

   public function create(){
   	return view('admin.product.create');
   }

   public function store(Request $request){
      $this->validate($request,[
         'name'=>'required',
         'description'=>'required|min:3',
         'image'=>'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
         'price'=>'required|numeric',
         'additional_info'=>'required',
         'category'=>'required'
      ]);
         $image = time().'.'.$request->image->getClientOriginalExtension();
         $request->image->move(public_path('product'), $image);
      //   $image = $request->file('image')->store('public/product');

        Product::create([

         'name'=>$request->name,
         'description'=>$request->description,
         'image'=>$image,
         'price'=>$request->price,
         'additional_info'=>$request->additional_info,
         'category_id'=>$request->category,
         'subcategory_id'=>$request->subcategory



      ]);
      notify()->success('Product created successfully!');
      return redirect()->back();

         
   }

   public function edit($id){
      $product = Product::find($id);
      return view('admin.product.edit',compact('product'));
   }

   public function update(Request $request,$id){
      $product = Product::find($id);
        $filename = $product->image;
        if($request->file('image')){
            $image = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('product'), $image);
            $product->name = $request->name;
            $product->description = $request->description;
            $product->image = $image;
            $product->price=$request->price;
            $product->additional_info = $request->additional_info;
            $product->category_id = $request->category;
            $product->subcategory_id = $request->subcategory;
            $product->save();
       }else{
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price=$request->price;
            $product->additional_info = $request->additional_info;
            $product->category_id = $request->category;
            $product->subcategory_id = $request->subcategory;
            $product->save();
    }
        notify()->success('Product updated successfully!');
        return redirect()->route('product.index');
   }


    public function destroy($id){
      $product = Product::find($id);
      $filename = $product->image;
      $product->delete();
      \Storage::delete($filename);
      notify()->success('Product deleted successfully!');
      return redirect()->route('product.index');
   }

    public function loadSubCategories(Request $request,$id){
        $subcategory  = Subcategory::where('category_id',$id)->pluck('name','id');
        return response()->json($subcategory);
    }



 
     


}

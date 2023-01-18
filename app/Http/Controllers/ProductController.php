<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  // public function catfunction(){
  //   $categories = Category::get();
  //   return view('categories.list',['as'=>$categories]);
 
  // }
  // public function create(){
  //   return view('categories.cat_create');
  //  /// dd('abc');
  // }

  // public function store(){
  //   return view('categories.cat_create');
  //  /// dd('abc');
  // }

  public function products(){
    $products = product::latest()->paginate(6);
    return view('products',compact('products'));
   /// dd('abc');
  }


  public function addProduct(Request $request){
  $request->validate([

    'name' =>'required|unique:products',
    'price' =>'required',
  ],
  [
    'name.required' =>'Name is required',
    'name.unique' =>'product already exists',
    'price.required' =>'price is required',

  ]


);


$product =new Product();
$product->name = $request->name;
$product->price = $request->price;
$product->save();

return response()->json([
   'status' =>'success',
]);

}

// product update method
public function updateProduct(Request $request){
  $request->validate([
    'up_name' =>'required|unique:products,name,'.$request->up_id,
    'up_price' =>'required',
  ],
  [
    'up_name.required' =>'Name is required',
    'up_name.unique' =>'product already exists',
    'up_price.required' =>'price is required',
  ]);

product::where('id',$request->up_id)->update([
  'name' =>$request->up_name,
  'price' =>$request->up_price,
]);

return response()->json([
   'status' =>'success',
]);
  
}


public function deleteProduct(Request $request){
product::find($request->dlt_id)->delete();
return response()->json([
  'status' =>'success',
]);

}





}
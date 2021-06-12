<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   function addproduct(Request $request)
   {
    $request->validate(
        [
           
            'productName' => 'required ',
            'productPrice'=>'',
            'productCategory'=>'',
        
         
            'productImage'=>'required|mimes:jpg,bmp,png,jpeg',
            
        ]
    );


    $profile='';
    if($request->hasFile('productImage'))
            {
                $image=$request->file('productImage');
                $name='plateImage'.rand(1,1000).time().'.'.$image->getClientOriginalExtension();
              
                $profile='images/products/'.$name;
               $request->productImage->move(public_path('images/products'),$profile);
                
                
            }
       $product = new Product();
       $product->productImage=$profile;
       $product->productName = $request->productName;
       $product->productPrice = $request->productPrice;
       $product->productAmount = $request->productAmount;
       $product->productDesc=preg_replace('/[^A-Za-z0-9\-]/', '', $request->desc); 
       $product->productCategory = $request->productCategory;
       $product->save();
       return redirect('/addProduct'); 
   }
   function deleteProduct($id)
   {
       Product::where('id',$id)->delete();
       return redirect('/allProducts');
   }

   function filterProducts ($id) {
    // dd($id);
     $category = Category::where('id',$id)->first(); 
     $products = Product::where('productCategory',$category->categoryName)->get();
   
     $categories = Category::get();
      return view('user/market2',compact('products','categories'));
  }

}

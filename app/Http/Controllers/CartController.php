<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Cupone;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    function deleteItem($id)
    {
        $cart = Cart::where('id',$id)->first();
        if($cart->user_id != Auth::user()->id)
        {
            return redirect('/logout');
        }
        Cart::where('product_id',$id)->delete();
        return redirect('/mycart');
    }
    function addtocart(Request $request,$id)
    {
        $product = Product::where('id',$id)->first();
        if($request->amount > $product ->productAmount)
        {
            $mess = "enter lower amount";
            return view('user/product',compact('product','mess'));
        }
        else
        {
            $product->productAmount = $product->productAmount - $request->amount;
            $product->save();
        }
    $price=$product->productPrice;
    $amount= $request->amount;
    $total = $price * $amount;
    $carts = Cart::where('user_id',Auth::user()->id)->get();
    foreach($carts as $cart)
    {
    if($cart->product_id == $id)
    {
        $cart->amount = $cart->amount + $request->amount;
        $cart->total= $cart->total + $total;
        $cart->save();
        return redirect('/market');
    }
}
    
        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->product_id= $id;
        $cart->productName= $product->productName;
        $cart->productImage= $product->productImage;
        $cart->amount= $request->amount;
        $cart->price = $product->productPrice;
        $cart->total= $total;
        $cart->save();
        return redirect('/market');

    }

    function myCart()
    {
        $cart = Cart::where([['user_id',Auth::user()->id],['done',0]])->get();
       // dd($cart);
       $total=0;
       foreach($cart as $car)
            $total=$total+$car->total;
        return view('user/cart',compact('cart','total'));
    }
    function applyCupone(Request $request)
    {
        $cupons = Cupone::where('user_id',Auth::user()->id)->get();
        $value=0;
        $cupone= '';
        foreach($cupons as $cupon)
        {
            if($cupon->name = $request->cupone)
            {
                $value = $cupon->value;
                $cupone=$cupon->name;
            }
        }
        $cart = Cart::where('user_id',Auth::user()->id)->get();
       // dd($cart);
       $total=0;
       foreach($cart as $car)
            $total=$total+$car->total;
            
       // dd($value); 
       $total2 = $total - $value;   
        return view('user/cart2',compact('cart','total','value',));
    }
}

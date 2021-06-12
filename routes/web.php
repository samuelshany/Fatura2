<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CuponeController;
use App\Http\Controllers\ProductController;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    $mess='';
    return view('login',compact('mess'));
});
Route::get('/register', function () {
   
    return view('register');
});

Route::post('/loginHandel',[UserController::class,'loginHandel']);
Route::post('/registerHandel',[UserController::class,'registerHandel']);

Route::get('/logout',[UserController::class,'logout']);

Route::middleware(['is_user'])->group(function () {
    Route::get('/market', function () {
        $products = Product::get();
        $categories = Category::get();
         return view('user/market',compact('products','categories'));
     });
     Route::get('/prooceed', function () {
         Cart::where('user_id',Auth::user()->id)->update(['done'=>1]);
        $products = Product::get();
        $categories = Category::get();
         return view('user/market',compact('products','categories'));
     });
     Route::get('/cart/{id}', function ($id) {
         $product = Product::where('id',$id)->first();
         //$categories = Category::get();
         $mess="";
          return view('user/product',compact('product','mess'));
      });
      Route::get('/history', function () {
          $cart = Cart::where([['user_id',Auth::user()->id],['done',1]])->get();
        $total=0;
        foreach($cart as $car)
             $total=$total+$car->total;
         return view('user/cartHistory',compact('cart','total'));
     });
    Route::get('/filterProducts/{id}',[ ProductController::class,'filterProducts']);
    Route::post('/addToCart/{id}',[CartController::class,'addtocart']);
    Route::post('/applyCupone',[CartController::class,'applyCupone']);
    Route::get('/mycart',[CartController::class,'myCart']);
    Route::get('deleteItem/{id}',[CartController::class,'deleteItem']);
});



Route::middleware(['is_admin'])->group(function () {

    
Route::get('/addCategory', function () {
  
    return view('admin/addCategory');
});
Route::get('/addProduct', function () {
 $categories = Category::get();
   return view('admin/addProduct',compact('categories'));
});
Route::get('/sendCupone', function () {
    $mess='';
      return view('admin/sendCupone',compact('mess'));
   });

    Route::post('/addCategoryHandel',[CategoryController::class,'createCategory']);
    Route::post('/addProductHandel',[ProductController::class,'addproduct']);
    Route::post('/sendCuponeH',[CuponeController::class,'sendCupone']);
});
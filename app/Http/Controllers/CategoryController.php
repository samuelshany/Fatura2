<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function createCategory(Request $request)
    {
        $request->validate(
            [
               
                'categoryName' => 'required |unique:categories',
            
               
            ]
        );
        $category = new Category();
        $category->categoryName = $request->categoryName;
        $category->save();
        return redirect('/addCategory'); 
    }
    function delete($id)
    {
        Category::where('id',$id)->delete();
        return redirect('/allCategories');
    }
    
}

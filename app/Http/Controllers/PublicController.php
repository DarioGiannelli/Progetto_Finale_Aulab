<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function home(){

        $products = Product::where('is_accepted',true)->orderBy('created_at', 'desc')->take(6)->get();
        
        return view('welcome', compact('products'));
        
    }

    public function categoryShow(Category $category)
    {
        return view('categoryShow', compact('category'));
    }

    public function searchProducts(Request $request){
        $products = Product::search($request->searched)->where('is_accepted',true)->paginate(10);
        
        return view('products.index', compact('products'));
    }

    // public function about(){
    //     return view('about');
    // }
}





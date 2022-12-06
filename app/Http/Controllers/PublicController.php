<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function home(){

        $products = Product::where('is_accepted',true)->take(6)->get()->sortByDesc('created_at');
        
        return view('welcome', compact('products'));
        
    }

    public function categoryShow(Category $category)
    {
        return view('categoryShow', compact('category'));
    }
}

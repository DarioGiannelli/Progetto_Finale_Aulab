<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Http\Livewire\CreateProduct;
use Illuminate\Support\Facades\Auth;

class CreateProduct extends Component
{
    public $name;
    public $description;
    public $price;
    public $brand;
    public $category;

    public function store()
    {
        Product::create([
            'name'=>$this->name,
            'description'=>$this->description,
            'price'=>$this->price,
            'brand'=>$this->brand,
            'user_id'=>Auth::id(),
            "category_id"=>$this->category,

        ]);
    }



    public function render()
    {
        return view('livewire.create-product');
    }
}

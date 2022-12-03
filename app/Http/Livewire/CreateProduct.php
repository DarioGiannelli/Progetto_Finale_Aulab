<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Http\Livewire\CreateProduct;

class CreateProduct extends Component
{
    public $name;
    public $description;
    public $price;
    public $brand;

    public function store()
    {
        Product::create([
            'name'=>$this->name,
            'description'=>$this->description,
            'price'=>$this->price,
            'brand'=>$this->brand,
        ]);
    }



    public function render()
    {
        return view('livewire.create-product');
    }
}

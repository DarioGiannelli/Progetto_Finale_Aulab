<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Http\Livewire\EditProduct;

class EditProduct extends Component
{
    public $productId;
    public $name;
    public $description;
    public $price;
    public $brand;
    public $category;

    


    public function updateProduct(){

        $product = Product::find($this->productId);
        $product->update(
          [ 
            'name'=> $this->name,
            'description'=> $this->description,
            'price'=> $this->price,
            'brand'=> $this->brand,
            'category_id'=>$this->category
          ]);

       


        return redirect()->route('products.dashboard');
        
    }

    public function mount($productId ){
        


        $product = Product::find($productId);
        $this->productId=$product->id;
        $this->name=$product->name;
        $this->description=$product->description;
        $this->price=$product->price;
        $this->brand=$product->brand;
        $this->category=$product->category_id;

    }

    public function render()
    {

        return view('livewire.edit-product');
    }


}

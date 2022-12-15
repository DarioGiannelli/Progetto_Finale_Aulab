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
    

    

    protected $rules = [
      'name'=>'required|min:4',
      'description'=>'required|min:8',
      'price'=>'required|numeric',
      'category'=>'required',
      'brand'=>'required|min:4',
      
  ];

  protected $messages = [
      'required'=>'Il campo è obbligatorio',
      'min'=>'Sono necessari almeno 4 caratteri',
      'numeric'=>'L\'importo deve essere un numero',
      
  ];
  public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function updateProduct(){
       
        $this->validate();
        $product = Product::find($this->productId);
        $product->update(
          [ 
            'name'=> $this->name,
            'description'=> $this->description,
            'price'=> $this->price,
            'brand'=> $this->brand,
            'category_id'=>$this->category,
            'image'=>$this->image
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

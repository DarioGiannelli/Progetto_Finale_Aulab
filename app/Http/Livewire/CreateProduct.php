<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Http\Livewire\CreateProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

class CreateProduct extends Component
{
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

   
    
    public function store()
    {
        $category = Category::find($this->category);
        $this->validate();

        $product = $category->products()->create([        
            'name'=>$this->name,
            'description'=>$this->description,
            'price'=>$this->price,
            'brand'=>$this->brand,
        ]);

        
        Auth::user()->products()->save($product);
        session()->flash('message', 'Annuncio inserito con successo');
        $this->cleanForm();
    }
   

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function cleanForm()
    {
        $this->name = '';
        $this->description = '';
        $this->price = '';
        $this->brand = '';
        $this->category = '';

    }



    public function render()
    {
        return view('livewire.create-product');
    }
}

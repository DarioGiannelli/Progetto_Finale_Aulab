<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use App\Http\Livewire\CreateProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

class CreateProduct extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $price;
    public $brand;
    public $category;
    
    public $message;
    public $validate;
    // img
    public $image;
    public $temporary_images;
    public $images = [];
    public $product;


    protected $rules = [
        'name'=>'required|min:4',
        'description'=>'required|min:8',
        'price'=>'required|numeric',
        'category'=>'required',
        'brand'=>'required|min:4',
        'images.*'=>'image|max:1024',
        'temporary_images.*'=>'image|max:1024',
    ];

    protected $messages = [
        'required'=>'Il campo è obbligatorio',
        'min'=>'Sono necessari almeno 4 caratteri',
        'numeric'=>'L\'importo deve essere un numero',
        'temporary_images.*.image'=>'I file devono essere immagini',
        'temporary_images.*.max'=>'L\'immagine dev\'essere massimo di 1mb',
        'images.image'=>'Il file dev\'essere un\'immagine',
        'images.max'=>'L\'immagine dev\'essere massimo di 1mb',
    ];

    public function updatedTemporaryImages(){
        if ($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])){
            foreach ($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key){

        if (in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

   
    
    public function store()
    {
        $category = Category::find($this->category);
        $this->validate();

        $product = $category->products()->create([        
            'name'=>$this->name,
            'description'=>$this->description,
            'price'=>$this->price,
            'brand'=>$this->brand,
            'user_id'=>Auth::user()->id,
        ]);

        if(count($this->images)){
            foreach ($this->images as $image){
                $product->images()->create(['path'=>$image->store('images', 'public')]);
            }

        }

        // $this->validate();

        // $this->product = Category::find($this->category)->products()->create($this->validate());
        // $this->product->user()->associate(Auth::user());
        // $this->product->save();
        // if(count($this->images)){
        //       foreach ($this->images as $image){
        //            $this->product->images()->create(['path'=>$image->store('images', 'public')]);
        //         }
    
        //     }

        
        // Auth::user()->products()->save($product);
        session()->flash('message', 'Annuncio inviato in revisione');
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
        $this->images = [];
        $this->temporary_images = [];

    }



    public function render()
    {
        return view('livewire.create-product');
    }
}

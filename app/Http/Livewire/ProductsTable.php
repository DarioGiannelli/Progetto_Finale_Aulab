<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductsTable extends Component
{
   

    public function deleteProduct($id){
        Product::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.products-table',
    [ 'products'=> Product::all()->sortByDesc('created_at') ]
    
    );
    }
}

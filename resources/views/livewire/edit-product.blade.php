<div>
<form wire:submit.prevent="updateProduct"> 
    
    <div class="container my-2">
        <div class="row justify-content-center">
            
            <div class="col-12">
                <input type="text" wire:model="name" class="form-control rounded-pill">                
            </div>
            
            <div class="col-12">
                <input type="text" wire:model="brand" class="form-control rounded-pill">                
            </div>

            <div class="col-12">
                <textarea cols="50" rows="3"  wire:model="description" class="form-control"></textarea>
            </div>
        
            <div class="mb-3">
                
                <select wire:model="category" id="category" class="form-control select rounded-pill my-2">
                    <option class="text-dark">Scegli la Categoria</option>
                    @foreach ($categories as $category)
                        <option class="text-dark" value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>            
            </div>

            <div class="col-12">
                <input  type="number" wire:model="price" class="form-control rounded-pill">
            </div>
        </div>   

    <button type="submit" class="btn-cust blu text-white btnForm btnForm2 rounded-pill">pubblica</button>

</form>
</div>


</div>

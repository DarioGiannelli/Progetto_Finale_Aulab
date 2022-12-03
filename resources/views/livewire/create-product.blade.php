<div>
    
    
<!-- FORM DI PROVA -->
@if (session()->has('message'))
    <div class="flex flex-rox justify-center my-2 alert alert-success">
        {{ session('message') }}
    </div>
@endif

    <form wire:submit.prevent="store">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Titolo annuncio</label>
            <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" wire:model="description" class="form-control @error('description') is-invalid @enderror">
            @error('description')
                {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" wire:model="brand" class="form-control @error('brand') is-invalid @enderror">
            @error('brand')
                {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <select wire:model.defer="category" id="category" class="form-control">
                <option value="">Scegli la Categoria</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>            
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" wire:model="price" class="form-control @error('price') is-invalid @enderror" >
            @error('price')
                {{$message}}
            @enderror
        </div>
        
       
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>

</div>

<div>
    
    
<!-- FORM DI PROVA -->
@if (session()->has('message'))
    <div class="flex flex-rox justify-center my-2 alert alert-success">
        {{ session('message') }}
    </div>
@endif

<form wire:submit.prevent="store"> 
    @csrf
    <div class="container my-2">
        <div class="row justify-content-center">
            
            <div class="col-12">
                <input type="text" wire:model="name"  placeholder="inserisci il nome del tuo prodotto" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                {{$message}}
                @enderror
            </div>
            
            <div class="col-12">
                <input type="text" placeholder="inserisci il brand del tuo prodotto" wire:model="brand" class="form-control @error('brand') is-invalid @enderror">
                @error('brand')
                    {{$message}}
                @enderror
            </div>

            <div class="col-12 d-flex justify-content-center">
                <textarea id="" cols="50" rows="10" placeholder="inserisci la descrizione del tuo prodotto"wire:model="description" class="form-control @error('description') is-invalid @enderror"></textarea>
                    @error('description')
                        {{$message}}
                    @enderror
            </div>

            <div class="mb-3">
                
                <select wire:model.defer="category" id="category" class="form-control">
                    <option value="">Scegli la Categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>            
            </div>

            <div class="col-12">
                <input type="number" placeholder="inserisci il prezzo del prodotto" wire:model="price" class="form-control @error('price') is-invalid @enderror" >
                @error('price')
                    {{$message}}
                @enderror
            </div>
        </div>
    
    </div>

    <button type="submit" class="btn-cust btnForm">clicca per inviarlo in revisione</button>
</form>

</div>

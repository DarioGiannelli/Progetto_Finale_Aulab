<div>
    
    
<!-- FORM DI PROVA -->
@if (session()->has('message'))
    <div class="flex flex-rox justify-center my-2 alert alert-success rounded-pill">
        {{ session('message') }}
    </div>
@endif

<form wire:submit.prevent="store"> 
    @csrf
    <div class="container my-2">
        <div class="row justify-content-center">
            
            <div class="col-12">
                <input class="rounded-pill" type="text" wire:model="name"  placeholder="inserisci il nome del tuo prodotto" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name')
                {{$message}}
                @enderror
            </div>
            
            <div class="col-12">
                <input class="rounded-pill" type="text" placeholder="inserisci il brand del tuo prodotto" wire:model="brand" class="form-control @error('brand') is-invalid @enderror" value="{{ old('brand') }}">
                @error('brand')
                    {{$message}}
                @enderror
            </div>

            <div class="col-12 d-flex justify-content-center">
                <textarea class="" id="" cols="50" rows="3" placeholder="inserisci la descrizione del tuo prodotto"wire:model="description" class="form-control @error('description') is-invalid @enderror" >{{ old('description') }}</textarea>
                    
            </div>
            @error('description')
                        {{$message}}
                    @enderror

            <div class="col-12">
            <input type="file" wire:model="temporary_images" name="images" multiple class="rounded-pill form-control @error('temporary_images.*') is-invalid @enderror" placeholder="img"/>
            @error('temporary_images.*')
                {{$message}}
            @enderror
            </div>
            @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>Phiga Preview</p>
                    <div class="row border border-4 border-info rounded py-4">
                        @foreach ($images as $key => $image)
                        <div class="col-12 my-3">
                            <img src="{{$image->temporaryUrl()}}" alt="" class="img-preview mx-auto rounded img-fluid">
                            <button type="button" class="btn btn-danger d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                        </div> 
                        @endforeach 
                    </div>   
                </div>
            </div>
            @endif

            <div class="mb-3">
                
                <select wire:model.defer="category" id="category" class="form-control select rounded-pill my-2">
                    <option class="text-dark">Scegli la Categoria</option>
                    @foreach ($categories as $category)
                        <option class="text-dark" value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>            
            </div>

            <div class="col-12">
                <input type="number" placeholder="inserisci il prezzo del prodotto" wire:model="price" class="rounded-pill form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                @error('price')
                    {{$message}}
                @enderror
            </div>
        </div>
    
    </div>

    <button type="submit" class="btn-cust blu text-white btnForm btnForm2 rounded-pill">pubblica</button>
</form>

</div>

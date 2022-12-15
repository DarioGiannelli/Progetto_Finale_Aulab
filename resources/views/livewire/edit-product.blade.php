<div>
<form wire:submit.prevent="updateProduct"> 
    
    <div class="container my-2">
        <div class="row justify-content-center">
            
            <div class="col-12">
                <input type="text" wire:model="name"   class="form-control rounded-pill
                 @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name')
                {{$message}}
                @enderror
            </div>
            
            <div class="col-12">
                <input  type="text" wire:model="brand" class="form-control rounded-pill
                 @error('brand') is-invalid @enderror" value="{{ old('brand') }}">
                @error('brand')
                    {{$message}}
                @enderror
            </div>

            <div class="col-12 d-flex justify-content-center">
                <textarea  id="" cols="50" rows="3"  wire:model="description" class="form-control
                 @error('description') is-invalid @enderror" >{{ old('description') }}</textarea>
                    
            </div>
            @error('description')
                        {{$message}}
                    @enderror

            <div class="mb-3">
                
                <select wire:model.defer="category" id="category" class="form-control select rounded-pill my-2">
                    <option class="text-dark">Scegli la Categoria</option>
                    @foreach ($categories as $category)
                        <option class="text-dark" value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>            
            </div>
            
            {{--IMG
                
                

            <div class="row">
                <div class="col-12">
                    <p>Photo Preview</p>
                    <div class="row border border-4 rounded py-4">
                        @foreach ($product->image as $key => $image)
                        <div class="col-6 col-md-4 my-3">
                            <img src="{{ $product->images()->get() }}" value="{{old('image')}}" class="img-preview mx-auto rounded img-fluid">
                            <button type="button" class="btn btn-danger d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">{{__('auth.delete')}}</button>
                        </div> 
                        @endforeach 
                    </div>   
                </div>
            </div> --}}
            


            <div class="col-12">
                <input  type="number" wire:model="price" class="form-control rounded-pill
                 @error('price') is-invalid @enderror" value="{{ old('price') }}">
                @error('price')
                    {{$message}}
                @enderror
            </div>
        </div>
    
    </div>

    <button type="submit" class="btn-cust blu text-white btnForm btnForm2 rounded-pill">pubblica</button>
</form>



</div>

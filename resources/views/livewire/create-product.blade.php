<div>
    
    
<!-- FORM DI PROVA -->

<form wire:submit.prevent="store"> 
    @csrf
    <div class="container my-2">
        <div class="row justify-content-center">
            
            <div class="col-12">
                <input class="rounded-pill" type="text" wire:model="name"  placeholder="{{__('ui.productName')}}" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name')
                {{$message}}
                @enderror
            </div>
            
            <div class="col-12">
                <input class="rounded-pill" type="text" placeholder="{{__('ui.productBrand')}}" wire:model="brand" class="form-control @error('brand') is-invalid @enderror" value="{{ old('brand') }}">
                @error('brand')
                    {{$message}}
                @enderror
            </div>

            <div class="col-12 d-flex justify-content-center">
                <textarea class="" id="" cols="50" rows="3" placeholder="{{__('ui.productDescription')}}" wire:model="description" class="form-control @error('description') is-invalid @enderror" >{{ old('description') }}</textarea>
                    
            </div>
            @error('description')
                        {{$message}}
                    @enderror

            <div class="col-12">
                <input type="file" wire:model="temporary_images" name="images" multiple class="rounded-pill @error('temporary_images.*') is-invalid @enderror" placeholder="img"/>
                @error('temporary_images.*')
                    {{$message}}
                @enderror
            </div>

            @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>Photo Preview</p>
                    <div class="row border border-4 rounded py-4">
                        @foreach ($images as $key => $image)
                        <div class="col-6 col-md-4 my-3">
                            <img src="{{$image->temporaryUrl()}}" alt="" class="img-preview mx-auto rounded img-fluid">
                            <button type="button" class="btn btn-danger d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">{{__('auth.delete')}}</button>
                        </div> 
                        @endforeach 
                    </div>   
                </div>
            </div>
            @endif

            <div class="mb-3">
                
                <select wire:model.defer="category" id="category" class="form-control select rounded-pill my-2">
                    <option class="text-dark">{{__('ui.productCategory')}}</option>
                    @foreach ($categories as $category)
                        <option class="text-dark" value="{{$category->id}}">
                        @if(session('locale') == 'en')
                            {{ $category->name_en }}
                        @else
                            {{ $category->name }}
                        @endif
                        </option>
                    @endforeach
                </select>            
            </div>

            <div class="col-12">
                <input type="number" placeholder="{{__('ui.productPrice')}}" wire:model="price" step="any" class="rounded-pill @error('price') is-invalid @enderror" value="{{ old('price') }}">
                @error('price')
                    {{$message}}
                @enderror
            </div>
        </div>
    
    </div>

    @if (session()->has('message'))
        <div class="flex flex-rox justify-center my-2 alert alert-success rounded-pill">
            {{ session('message') }}
        </div>
    @endif
    <button type="submit" class="btn-cust btnLogin text-white btnForm2 rounded-pill">{{__('ui.publishArticle')}}</button>
</form>

</div>

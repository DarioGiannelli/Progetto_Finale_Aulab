<x-layout>
@if (session()->has('message'))
    <div class="flex flex-rox justify-center my-2 alert alert-success">
        {{ session('message') }}
    </div>
@endif

    <x-masthead/>
    <div class="container-fluid">
        <div class="row category">
            <div class="col-12">

                <h2 class="text-center display-3 my-5">{{__('ui.ourCategories')}}</h2>
            </div>
            @foreach ($categories as $category)
                <div class="col-6 col-md-2 text-center d-flex align-items-center justify-content-center my-3">
                    
                        <a href="{{route('categoryShow', $category)}}" class="btn rounded-pill d-flex align-items-center justify-content-center boxIcon">
                            <i class="{{ $category->icon }} fa-3x my-5 text-white categoryIcon"></i>
                            {{-- <h3 class="mb-4">{{ $category->name }}</h3> --}}
                        </a>
                    
                </div>
            @endforeach
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="display-3 text-center mt-5">{{__('ui.lastProducts')}}</h2>
            </div>
            @foreach ($products as $product)
                <div class="col-12 col-md-4 my-5 d-flex justify-content-center">
                    <div class="cardCust position-relative">
                        <div class="imgbox">
                                <img src="{{!$product->images()->get()->isEmpty() ? Storage::url($product->images()->first()
                                    ->path): 'https://picsum.photos/seed/picsum/200/300'}}" alt="" srcset="" class="imgCust">


                        </div>
                        <div class="details container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="title">{{$product->name}}</h2>
                                </div>
                                <div class="col-12">
                                    <span class="caption">{{$product->getDescriptionSubstring()}}</span>
                                </div>
                                <div class="col-12">
                                    <span class="caption">€ {{$product->price}}</span>
                                </div>
                                <div class="col-12">
                                    <a href="{{route('categoryShow', $product->category)}}" class="caption">Categoria: {{$product->category->name}}</a>
                                </div>
                                <div class="col-12">
                                    <span class="caption">Pubblicato il: {{$product->created_at->format('d/m/Y')}}</</span>
                                </div>
                                <div class="col-12 mt-2">
                                <a href="{{route('products.show', $product)}}" class="btnCard rounded-pill"><i class="fa-solid text-primary fa-2x fa-circle-info iconCustom"></i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
<x-layout>
@if (session()->has('message'))
    <div class="flex flex-rox justify-center my-2 alert alert-success">
        {{ session('message') }}
    </div>
@endif

    <x-masthead/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <h2 class="text-white text-center display-3">Le nostre categorie:</h2>
            </div>
            @foreach ($categories as $category)
                <div class="col-6 col-md-2 text-center">
                    <a href="{{route('categoryShow', $category)}}">
                        <i class="{{ $category->icon }} fa-2x my-3 text-yellow"></i>
                        <h3>{{ $category->name }}</h3>
                    </a>
                </div>
            @endforeach
            <div class="col-12">
                <h2 class="text-white display-3 text-center mt-5">Ultimi prodotti:</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-12 col-md-4 my-5 d-flex justify-content-center">
                    <div class="cardCust">
                        <div class="imgbox">
                            <div class="imgCust"></div>
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
                                    <a href="{{route('products.show', $product)}}" class="btn btn-primary btnCard">Visualizza</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
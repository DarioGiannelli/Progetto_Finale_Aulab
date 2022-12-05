<x-layout>
    <x-masthead/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center my-5">
                <h2 class="text-white display-3">Le nostre categorie:</h2>
            </div>
            @foreach ($categories as $category)
                <div class="col-3 col-md-2 text-center">
                    <a href="{{route('categoryShow', $category)}}">
                        <i class="{{ $category->icon }} fa-2x my-3 text-yellow"></i>
                        <h3>{{ $category->name }}</h3>
                    </a>
                </div>
            @endforeach
            <div class="col-12 d-flex justify-content-center my-5">
                <h2 class="text-white display-3">Ultimi prodotti:</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-12 col-md-3 my-5 d-flex justify-content-center">
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
                                    <span class="caption">{{$product->description}}</span>
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
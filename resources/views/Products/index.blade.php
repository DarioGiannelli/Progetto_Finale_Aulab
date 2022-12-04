<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>Presto.it</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-12 col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/200 " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->description}}</</p>
                    <p class="card-text">{{$product->price}}</</p>
                    <a href="{{route('categoryShow', $product->category)}}" class="btn btn-primary">Categoria {{$product->category->name}}</a>
                    <p class="card-footer">Pubblicato il:{{$product->created_at->format('d/m/Y')}} - Autore :{{$product->user->name ?? ''}}</</p>
                    <a href="{{route('products.show', $product)}}" class="btn btn-primary">Visualizza</a> 
                </div>
                </div>
            </div>
        @endforeach
        {{$products->links()}}
        </div>
    </div>
</x-layout>
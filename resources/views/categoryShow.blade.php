<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>Presto.it</h1>
            </div>
        </div>
        <div class="row">
            @forelse ($category->products as $product)
            <div class="col-12 col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/200 " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->description}}</</p>
                    <p class="card-text">{{$product->price}}</</p>
                    <a href="#" class="btn btn-primary">Visualizza</a> 
                    <p class="card-footer">Pubblicato il:{{$product->created_at->format('d/m/Y')}}
                        - Autore :{{$product->user->name ?? ''}}</</p>
                </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class='h1'> Non sono presenti annunci per questa categoria</p>
                <p class='h2'> pubblicane uno : <a href="{{route('products.create')" class='btn btn-success'>Nuovo annuncio </a></p>
            </div>
        @endforelse

        </div>
    </div>
</x-layout>
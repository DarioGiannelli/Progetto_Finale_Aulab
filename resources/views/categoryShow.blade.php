<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 mt-5">Annunci per la categoria: {{ $category->name }}</h1>
            </div>
        </div>
        <div class="row">
            @forelse ($category->products as $product)
                <x-card 
                    :product='$product'
                />
            @empty
                <div class="col-12">
                    <p class='h1'> Non sono presenti annunci per questa categoria</p>
                    <p class='h2'> pubblicane uno : <a href="{{route('products.create')}}" class='btn btn-success'>Nuovo annuncio </a></p>
                </div>
            @endforelse
        {{-- <div class="col-12 d-flex justify-content-center">
            {{$products->links()}}
        </div> --}}
    </div>
</x-layout>
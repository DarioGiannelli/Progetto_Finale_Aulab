<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Annuncio {{$product->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="https://picsum.photos/id/27/1200/200" class="img-fluid p-3 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="https://picsum.photos/id/28/1200/200" class="img-fluid p-3 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="https://picsum.photos/id/29/1200/200" class="img-fluid p-3 rounded" alt="...">
                    </div>
                </div>
            </div>
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</</p>
                <p class="card-text">{{$product->price}}</</p>
                <a href="{{route('categoryShow', $product->category)}}" class="btn btn-primary">Categoria {{$product->category->name}}</a>
                <p class="card-footer">Pubblicato il:{{$product->created_at->format('d/m/Y')}}</</p>
            </div>
        </div>
    </div>

</x-layout>
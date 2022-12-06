<x-layout>
    
<div class="container">
    <div class="row">
    @if (session()->has('message'))
    <div class="flex flex-rox justify-center my-2 alert alert-success">
        {{ session('message') }}
    </div>
@endif
        <div class="col-12">
            <h1> {{$product_to_check ? 'Annuncio da revisionare' : 'Nessun annuncio da revisionare.'}}</h1>
        </div>
    </div>
</div>
@if ($product_to_check)
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

            <div class="container my-3">
                <div class="row">

                    <div class="col-6 text-center text-dark">
                        <img src="https://picsum.photos/200/300" alt="">
                    </div>

                    <div class="col-5 text-center text-dark">
    
                        <h5 class="card-title my-3 text-warning">{{$product_to_check->name}}</h5>
                        <div class="prodottoSingolo">
                            <p class="card-text my-3 ">Descrizione: {{$product_to_check->description}}</</p>
                            <p class="card-text my-3">{{$product_to_check->price}} €</</p>
                            <a href="{{route('categoryShow', $product_to_check->category)}}" class="btn btn-primary">Categoria {{$product_to_check->category->name}}</a>
                            <p class="card-footer my-3">Pubblicato il:{{$product_to_check->created_at->format('d/m/Y')}}</</p>
                            <form action="{{Route('revisor.accept_product', ['product'=>$product_to_check])}}"method="POST">
                                @csrf
                                @method('PATCH')
                               <button class="btn btn-success" type="submit"> Accetta </button>
                            </form>
                            <form action="{{Route('revisor.reject_product', ['product'=>$product_to_check])}}"method="POST">
                                @csrf
                                @method('PATCH')
                               <button class="btn btn-warning" type="submit"> Rifiuta </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif



</x-layout>
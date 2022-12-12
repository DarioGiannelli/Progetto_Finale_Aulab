<x-layout>
    
<div class="container">
    <div class="row">
    @if (session()->has('message'))
    <div class="flex flex-rox justify-center my-2 alert alert-success">
        {{ session('message') }}
    </div>
@endif
        <div class="col-12 my-4">
            <h1> {{$product_to_check ? 'Annuncio da revisionare' : 'Nessun annuncio da revisionare.'}}</h1>
        </div>
    </div>
</div>
{{-- @if ($product_to_check)
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
                            <p class="card-text my-3 ">Descrizione: {{$product_to_check->description}}</p>
                            <p class="card-text my-3">{{$product_to_check->price}} €</</p>
                            <a href="{{route('categoryShow', $product_to_check->category)}}" class="btn btn-primary">Categoria {{$product_to_check->category->name}}</a>
                            <p class="card-footer my-3">Pubblicato il:{{$product_to_check->created_at->format('d/m/Y')}}</p>
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
@endif --}}


@if ($product_to_check)
{{-- <div class="container-fluid my-4 mt-5">
    <div class="row">
        <div class="col-12">
            <h1>Prodotto selezionato</h1>
        </div>
    </div>
</div> --}}

<div class="container prodotto mb-5 text-dark">
    <div class="row">
        {{-- swiper --}}
        <div class="col-12 col-md-6">
            <div class="container">
                <div class="row">
                    {{-- swiper --}}
                    <div class="col-12">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 rounded-4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-1.jpg"/>
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            </div>
                            <div thumbsSlider="" class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-1.jpg" class=" rounded-4"/>
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-2.jpg" class=" rounded-4"/>
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" class=" rounded-4"/>
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-4.jpg" class=" rounded-4"/>
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-5.jpg" class=" rounded-4"/>
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-6.jpg" class=" rounded-4"/>
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-7.jpg" class=" rounded-4"/>
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-8.jpg" class=" rounded-4"/>
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-9.jpg" class=" rounded-4"/>
                                </div>
                                <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-10.jpg" class=" rounded-4"/>
                                </div>
                            </div>
                            </div>
                    </div>
                    <div class="col-12">

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 d-flex flex-column">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="h1 mt-4">{{$product_to_check->name}}</h2>
                        <p class="fs-5 mb-4">{{$product_to_check->brand}}</p>

                        <h3>Descrizione</h3>
                        
                        <p class="mb-4 fs-5">{{$product_to_check->description}}</p>

                        <h3>Prezzo:</h3>

                        <p class="mb-4 fs-5">€ {{$product_to_check->price}}</p>
                        
                        <h3>Caricato da:</h3>
            
                        <p class="mb-4 fs-5">{{$product_to_check->user->name}}</p>
            
                        <h3>Il:</h3>
            
                        <p class="mb-4 fs-5">{{$product_to_check->created_at->format('d/m/Y')}}</p>
            
                        <h3>Categoria:</h3>
            
                        <a href="{{route('categoryShow', $product_to_check->category)}}" class="btn btn-primary rounded-pill">{{$product_to_check->category->name}}</a>
                    </div>
                </div>
                <div class="mt-4 row">
                    <div class="col-12">
                        <h4>Revisione:</h4>
                    </div>
                    {{-- <div class="col-12">
                        <button class="btn btn-danger rounded-pill">Aggiungi al carrello</button>
                    </div> --}}
                    <div class="col-2 d-flex justify-content-center">
                        <form action="{{Route('revisor.accept_product', ['product'=>$product_to_check])}}"method="POST">
                            @csrf
                            @method('PATCH')
                           <button class="btn btn-success rounded-pill" type="submit">Accetta</button>
                        </form>
                    </div>
                    <div class="col-2 d-flex justify-content-center">
                        <form action="{{Route('revisor.reject_product', ['product'=>$product_to_check])}}"method="POST">
                            @csrf
                            @method('PATCH')
                           <button class="btn btn-warning rounded-pill" type="submit">Rifiuta</button>
                        </form>
                    </div>
                </div>
                
                
            </div>
        </div>

    </div>
</div>
@endif



</x-layout>
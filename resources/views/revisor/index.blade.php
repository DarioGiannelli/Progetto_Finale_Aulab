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

@if ($product_to_check)

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

                                @if ($product_to_check->images)
                                    @foreach ($product_to_check->images as $image)
                                        <div class="swiper-slide">
                                            <img src="{{Storage::url($image->path)}}" class="img-fluid rounded-4"/>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <img src="https://picsum.photos/id/27/300" class="rounded-4"/>
                                    </div>

                                    <div class="swiper-slide">
                                        <img src="https://picsum.photos/id/28/300" class="rounded-4"/>
                                    </div>

                                    <div class="swiper-slide">
                                        <img src="https://picsum.photos/id/29/300" class="rounded-4"/>
                                    </div>
                                @endif
                            </div>


                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                        @if ($product_to_check->images)
                            @foreach ($product_to_check->images as $image)
                                <div class="swiper-slide">
                                    <img src="{{Storage::url($image->path)}}" class="img-fluid rounded-4"/>
                                </div>
                            @endforeach
                        @endif
                        
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
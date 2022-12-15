<x-layout>
    
<div class="container">
    <div class="row">
        @if (session()->has('message'))
            <div class="flex flex-rox justify-center my-2 alert alert-success rounded-pill">
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
        <div class="col-12 col-md-7">
            <div class="container">
                <div class="row">
                    {{-- swiper --}}
                    <div class="col-12">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 rounded-4">
                        <div class="swiper-wrapper">

                        @if (count($product_to_check->images) > 0)
                                @foreach ($product_to_check->images as $image)
                                <div class="swiper-slide">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6">
                                                <img src="{{$image->getUrl(500,500)}}" />
                                            </div>
                                            {{-- inizio tags --}}

                                            <div class="col-3">
                                                <h5>
                                                 tags
                                                </h5>
                                                <div class="p-2">
                                                    @if($image->labels)
                                                        @foreach($image->labels as $label)
                                                             <p class="d-inline">{{$label}},</p>
                                                         @endforeach
                                                    @endif


                                                </div>
                                            </div>
                                            {{-- fine tags --}}
                                            

                                            {{-- inizio validazione --}}
                                            <div class="col-3">
                                                <h4>
                                                    validazione
                                                </h4>
                                                <p>Adult: <span class="{{$image->adult}}"></span> </p>
                                                <p>Satira: <span class="{{$image->spoof}}"></span> </p>
                                                <p>Medicina: <span class="{{$image->medical}}"></span> </p>
                                                <p>Violenza: <span class="{{$image->violence}}"></span> </p>
                                                <p>Contenuto ammiccante: <span class="{{$image->racy}}"></span> </p>

                                            </div>
                                            {{-- fine validazione --}}

                                        </div>

                                    </div>
                                </div>

                            

                            @endforeach
                            @else

                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/id/27/300" />
                                </div>

                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/id/28/300"/>
                                </div>

                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/id/29/300"/>
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
                                <img src="{{$image->getUrl(500,500)}}" class="img-fluid rounded-4"/>
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

        <div class="col-12 col-md-5 d-flex flex-column">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="h1 mt-4">{{$product_to_check->name}}</h2>
                        <p class="fs-5 mb-4">{{$product_to_check->brand}}</p>

                        <h3>Descrizione</h3>
                        
                        <p class="mb-4 fs-5">{{$product_to_check->description}}</p>
                    </div>
                    <div class="col-6">
                        <h3>Prezzo:</h3>

                        <p class="mb-4 fs-5">€ {{$product_to_check->price}}</p>
                    </div>
                    <div class="col-6">
                        <h3>Caricato da:</h3>
                
                        <p class="mb-4 fs-5">{{$product_to_check->user->name}}</p>
                    </div>

                        
                        
                        
            
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
                    <div class="col-6 d-flex justify-content-center">
                        <form action="{{Route('revisor.accept_product', ['product'=>$product_to_check])}}"method="POST">
                            @csrf
                            @method('PATCH')
                           <button class="btn btn-success rounded-pill" type="submit">Accetta</button>
                        </form>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
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
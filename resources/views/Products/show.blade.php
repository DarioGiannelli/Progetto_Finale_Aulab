<x-layout>

    <div class="container-fluid my-4 mt-5">
        <div class="row">
            <div class="col-12">
                <h1>Prodotto selezionato</h1>
            </div>
        </div>
    </div>

    {{-- <div class="container">
        <div class="row">
            <div class="col-9">  per card correlati --}}
                {{-- swiper + descrizione --}}
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
                        {{-- descrizione --}}
                        <div class="col-12 col-md-6 d-flex flex-column">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <h2 class="h1 mt-4">{{$product->name}}</h2>
                                                <p class="fs-5 mb-4">{{$product->brand}}</p>
            
                                                <h3>Descrizione</h3>
                                                
                                                <p class="mb-4 fs-5">{{$product->description}}</p>
                                                
                                                <h3>Prezzo:</h3>
            
                                                <p class="mb-4 fs-5">€ {{$product->price}}</p>
                                            </div>
                                            <div class="col-6">
                                                <h3>Caricato da:</h3>
                                            </div>
                                            <div class="col-6">
                                                <h3>Il:</h3>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-4 fs-5">{{$product->user->name}}</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-4 fs-5">{{$product->created_at->format('d/m/Y')}}</p>
                                            </div>
                                        </div>
            
                                        <h3>Categoria:</h3>
                            
                                        <a href="{{route('categoryShow', $product->category)}}" class="btn btn-primary rounded-pill">{{$product->category->name}}</a>
                                    </div>
                                </div>
                                <div class="mt-4 row">
                                    <div class="col-12">
                                        <button class="btn btn-danger rounded-pill">Aggiungi al carrello</button>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
            
                    </div>
            
                </div>

            {{-- </div>
            <div class="col-3"></div>
        </div>
    </div>     --}}

</x-layout>
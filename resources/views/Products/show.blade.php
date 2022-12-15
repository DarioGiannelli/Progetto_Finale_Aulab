<x-layout>

    <div class="container-fluid my-4 mt-5">
        <div class="row">
            <div class="col-12">
                <h1>{{__('ui.selectedProduct')}}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
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

                                                @if ($product->images)
                                                    @foreach ($product->images as $image)
                                                        <div class="swiper-slide">
                                                            <img src="{{$image->getUrl(500,500)}}" class="img-fluid"/>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="swiper-wrapper">
                        
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

                                                @if ($product->images)
                                                    @foreach ($product->images as $image)
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
                        {{-- descrizione --}}
                        <div class="col-12 col-md-6 d-flex flex-column">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <h2 class="h1 mt-4">{{$product->name}}</h2>
                                                <p class="fs-5 mb-4">{{$product->brand}}</p>

                                                <h3>{{__('ui.descriptionShow')}}</h3>
                                                
                                                <p class="mb-4 fs-5">{{$product->description}}</p>
                                                
                                                <h3>{{__('ui.priceShow')}}:</h3>

                                                <p class="mb-4 fs-5">€ {{$product->price}}</p>
                                            </div>
                                            <div class="col-6">
                                                <h3>{{__('ui.uploadedShow')}}:</h3>
                                            </div>
                                            <div class="col-6">
                                                <h3>{{__('ui.whenShow')}}:</h3>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-4 fs-5">{{$product->user->name}}</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-4 fs-5">{{$product->created_at->format('d/m/Y')}}</p>
                                            </div>
                                        </div>

                                        <h3>{{__('ui.category')}}:</h3>
                            
                                        <a href="{{route('categoryShow', $product->category)}}" class="btn verde text-white rounded-pill  my-2">
                                            @if(session('locale') == 'en')
                                                {{$product->category->name_en}}
                                            @else
                                                {{$product->category->name}}
                                            @endif

                                        </a>
                                    </div>
                                </div>
                                <div class="mt-4 row">
                                    <div class="col-12">
                                        <button class="btn rosso text-white rounded-pill ">{{__('ui.cartShow')}}</button>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            {{-- articoli correlati --}}
            <div class="col-12 col-md-3 container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-center text-white">{{__('ui.relatedProduct')}}</h4>
                    </div>
                </div>
                <div class="row align-content-around">
                    @foreach($relatedProducts as $related)
                        <div class="col-12 my-1">

                            <div class="relatedDiv rounded-4">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="{{!$related->images()->get()->isEmpty() ?
                                                $related->images()->first()->getUrl(500,500) : 'https://picsum.photos/seed/picsum/200/300'}}" alt="" srcset="" class="rounded-4 relatedImg my-2">
                                        </div>
                                        <div class="col-12">
                                            <h5 class="text-center">{{$related->name}}</h5>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="{{route('products.show', $related)}}" class="btnCard rounded-pill"><i class="fa-solid text-primary fa-2x fa-circle-info"></i></a> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>    

</x-layout>
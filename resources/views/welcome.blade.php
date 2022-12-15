<x-layout>
@if (session()->has('message'))
    <div class="flex flex-rox justify-center my-2 alert alert-success">
        {{ session('message') }}
    </div>
@endif

    <x-masthead/>
    <div class="container-fluid">
        <div class="row category">
            <div class="col-12">

                <h2 class="text-center display-3 my-5">{{__('ui.ourCategories')}}</h2>

                <div class="swiper mySwiper d-sm-block d-md-none">
                    <div class="swiper-wrapper">
                        @foreach ($categories as $category)
                            <div class="swiper-slide">
                                <a href="{{route('categoryShow', $category)}}" class="btn rounded-pill d-flex align-items-center justify-content-center boxIcon">
                                    <i class="{{ $category->icon }} fa-3x my-5 text-white categoryIcon"></i>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> --}}
                </div>
                <div class="swiper-pagination mt-2 d-sm-block d-md-none"></div>

            </div>
            {{-- icon --}}

   


            @foreach ($categories as $category)
                <div class="col-2 my-3 d-none d-md-block">
                    
                        <a href="{{route('categoryShow', $category)}}" class="btn rounded-pill d-flex align-items-center justify-content-center boxIcon mx-auto">
                            <i class="{{ $category->icon }} fa-3x my-5 text-white categoryIcon"></i>
                            {{-- <h3 class="mb-4">{{ $category->name }}</h3> --}}
                        </a>
                    
                </div>
            @endforeach
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="display-3 text-center mt-5">{{__('ui.lastProducts')}}</h2>
            </div>

            {{-- carosello piccoli schermi per card --}}
            <div class="col-12">
            <div id="carouselExampleControls" class="carousel slide d-sm-block d-md-none" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($products as $product)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="col-12 my-5 d-flex justify-content-center">
                                <div class="cardCust position-relative">
                                    <div class="imgbox">
                                            <img src="{{!$product->images()->get()->isEmpty() ?
                                        $product->images()->first()->getUrl(500,400) : 'https://picsum.photos/seed/picsum/200/300'}}" alt="" srcset="" class="imgCust">


                                    </div>
                                    <div class="details container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <h2 class="title">{{$product->name}}</h2>
                                            </div>
                                            <div class="col-12">
                                                <span class="caption">{{$product->getDescriptionSubstring()}}</span>
                                            </div>
                                            <div class="col-12">
                                                <span class="caption">€ {{$product->price}}</span>
                                            </div>
                                            <div class="col-12">
                                                <a href="{{route('categoryShow', $product->category)}}" class="caption">{{__('ui.category')}}:
                                                @if(session('locale') == 'en')
                                                    {{ $product->category->name_en }}
                                                @else
                                                    {{ $product->category->name}}
                                                @endif
                                                </a>
                                            </div>
                                            <div class="col-12">
                                                <span class="caption">{{__('ui.publishAt')}}: {{$product->created_at->format('d/m/Y')}}</</span>
                                            </div>
                                            <div class="col-12 mt-2">
                                            <a href="{{route('products.show', $product)}}" class="btnCard rounded-pill"><i class="fa-solid text-primary fa-2x fa-circle-info iconCustom"></i></a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            
            </div>
            </div>
            {{-- swiper grandi schermi card --}}
            <div class="col-12 d-flex justify-content-center d-none d-md-block">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($products as $product)
                            <div class="swiper-slide">
                                <div class="col-12 col-md-4 my-5">
                                    <div class="cardCust position-relative">
                                        <div class="imgbox">
                                                <img src="{{!$product->images()->get()->isEmpty() ?
                                            $product->images()->first()->getUrl(500,400) : 'https://picsum.photos/seed/picsum/200/300'}}" alt="" srcset="" class="imgCust">


                                        </div>
                                        <div class="details container-fluid">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h2 class="title">{{$product->name}}</h2>
                                                </div>
                                                <div class="col-12">
                                                    <span class="caption">{{$product->getDescriptionSubstring()}}</span>
                                                </div>
                                                <div class="col-12">
                                                    <span class="caption">€ {{$product->price}}</span>
                                                </div>
                                                <div class="col-12">
                                                    <a href="{{route('categoryShow', $product->category)}}" class="caption">{{__('ui.category')}}:
                                                    @if(session('locale') == 'en')
                                                        {{ $product->category->name_en }}
                                                    @else
                                                        {{ $product->category->name}}
                                                    @endif
                                                    </a>
                                                </div>
                                                <div class="col-12">
                                                    <span class="caption">{{__('ui.publishAt')}}: {{$product->created_at->format('d/m/Y')}}</</span>
                                                </div>
                                                <div class="col-12 mt-2">
                                                <a href="{{route('products.show', $product)}}" class="btnCard rounded-pill"><i class="fa-solid text-primary fa-2x fa-circle-info iconCustom"></i></a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> --}}
                </div>
            </div>
            <div class="swiper-pagination mt-2"></div>
    </div>
</x-layout>
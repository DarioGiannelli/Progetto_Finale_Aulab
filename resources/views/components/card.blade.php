<div class="col-12 col-md-4 my-5 d-flex justify-content-center">
  <div class="cardCust position-relative">
      <div class="imgbox">
      <img src="{{!$product->images()->get()->isEmpty() ?
   $product->images()->first()->getUrl(500,400) : 'https://picsum.photos/seed/picsum/400/400'}}" alt="" srcset="" class="imgCust">

      </div>
      
      <div class="details container-fluid">
          <div class="row">
              <div class="col-12">
                  <h2 class="title">{{$product->name}}</h2>
                  
              </div>
              <div class="col-12">
                  <span class="caption">{{$product->getDescriptionSubstring()}}</span>
              </div>
              <div class="col-12 container-fluid">
                  <span class="caption">€ {{$product->price}}</span>
              </div>
              {{-- <div class="col-12">
                  <a href="{{route('categoryShow', $product->category)}}" class="caption"> {{__('ui.category')}}: 
                @if(session('locale') == 'en')
                    {{ $category->name_en }}
                @else
                    {{$category->name}}
                @endif
                  </a>
              </div> --}}
                <div class="col-12">
                    <a href="{{route('categoryShow', $product->category)}}" class="caption">
                        <i class="{{ $product->category->icon }} text-white categoryIcon"></i> 
                        @if(session('locale') == 'en')
                            {{ $product->category->name_en }}
                        @else
                            {{ $product->category->name}}
                        @endif - 
                        {{__('ui.whenShow')}}: {{$product->created_at->format('d/m/Y')}}</a>
                </div>
              <div class="col-12">
                  <span class="caption">{{ __('ui.creator') }}: {{$product->user->name ?? ''}}</span>
              </div>
              <div class="col-12 mt-2">
                <a href="{{route('products.show', $product)}}" class="btnCard rounded-pill"><i class="text-primary fa-solid fa-2x fa-circle-info iconCustom"></i></a> 
              </div>
          </div>
      </div>
  </div>
</div>
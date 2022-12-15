<div>

<table class="table table-light my-5 text-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">{{ __('ui.review') }}</th>
      <th scope="col">Status</th>
      <th scope="col">{{ __('ui.title') }}</th>
      <th scope="col">{{ __('ui.category') }}</th>
      {{-- <th scope="col" class="">Descrizione</th> --}}
      <th scope="col">{{ __('ui.priceShow') }}</th>
      <th scope="col" class="text-center">{{ __('ui.action') }}</th>
      {{-- <th scope="col">Revisiona</th> --}}
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row" class="text-center">{{$product->id}}</th>
      <td><a href="{{route('revisor.show', $product)}}" class="btnCard rounded-pill"><i class="fa-solid text-warning fa-2x fa-circle-info"></i></a></td>
      
      <td>
        @if($product->is_accepted)
            <i class="text-success fas fa-circle"></i>
          @else
          <i class="text-danger fas fa-circle"></i>
        @endif

      </td>
      <td>{{$product->name}}</td>
      <td>
      @if(session('locale') == 'en')
        {{ $product->category->name_en }}
      @else
        {{ $product->category->name}}
      @endif
      </td>
      {{--<td class="">{{$product->getDescriptionSubstring()}}</td> --}}
      <td>€ {{$product->price}}</td>
      <td class='d-flex align-item-center justify-content-center'>
        <button class="btn rosso text-white rounded-pill" wire:click="deleteProduct({{$product->id}})">{{__('auth.delete')}}</button>
        <a class="btn blu text-white rounded-pill ms-2" href="{{route('products.edit', $product)}}">{{__('auth.update')}}</a>
      </td>

      {{--COLONNA REVISIONA
      <td><button class="btn verde text-white rounded-pill mx-2">{{__('auth.accept')}}</button></td>
      --}}

    </tr>
    @endforeach
  
   
  </tbody>
</table>

</div>

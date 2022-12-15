<div>

<table class="table my-5 text-white">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Status</th>
      <th scope="col">Titolo</th>
      <th scope="col">Categoria</th>
      {{-- <th scope="col" class="">Descrizione</th> --}}
      <th scope="col">Prezzo</th>
      <th scope="col" class="text-center">Azioni</th>
      <th scope="col">Revisiona</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->id}}<a href="{{route('revisor.show', $product)}}" class="btnCard rounded-pill"><i class="fa-solid text-warning fa-2x fa-circle-info"></i></a></th>
      <td>{{$product->brand}}

      
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
        <a class="btn blu text-white rounded-pill" href="{{route('products.edit', $product)}}">{{__('auth.update')}}</a>
      </td>
      <td><button class="btn verde text-white rounded-pill mx-2">{{__('auth.accept')}}</button>
</td>
    </tr>
    @endforeach
  
   
  </tbody>
</table>

</div>

<div>

<table class="table my-5 text-white">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Titolo</th>
      <th scope="col">Brand</th>
      <th scope="col">Categoria</th>
      <th scope="col" class="">Descrizione</th>
      <th scope="col">Prezzo</th>
      <th scope="col">Azioni</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->brand}}</td>
      <td>
      @if(session('locale') == 'en')
        {{ $product->category->name_en }}
      @else
        {{ $product->category->name}}
      @endif
      </td>
      <td class="">{{$product->getDescriptionSubstring()}}</td>
      <td>€ {{$product->price}}</td>
      <td class='d-flex align-item-center justify-content-center'>
        <button class="btn rosso text-white rounded-pill" wire:click="deleteProduct({{$product->id}})">{{__('auth.delete')}}</button>
        <button class="btn verde text-white rounded-pill mx-2">{{__('auth.accept')}}</button>
        <a class="btn blu text-white rounded-pill" href="{{route('products.edit', $product)}}">{{__('auth.update')}}</a>
      </td>
    </tr>
    @endforeach
  
   
  </tbody>
</table>

</div>

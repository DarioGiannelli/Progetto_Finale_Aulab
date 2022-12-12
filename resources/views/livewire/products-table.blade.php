<div>

<table class="table my-5 table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Titolo</th>
      <th scope="col">Brand</th>
      <th scope="col">Categoria</th>
      <th scope="col">Descrizione</th>
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
      <td>{{$product->category->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->price}}</td>
      <td class='d-flex align-item-center justify-content-center'>
        <button class="btn btn-danger" wire:click="deleteProduct({{$product->id}})"> Elimina</button>
        <button class="btn btn-success mx-2"> Accetta</button>
        <a class="btn btn-warning" href="{{route('products.edit', $product)}}"> Modifica</a>
      </td>
    </tr>
    @endforeach
  
   
  </tbody>
</table>

</div>

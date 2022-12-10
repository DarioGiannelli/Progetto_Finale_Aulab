<div>

<table class="table my-5 table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">brand</th>
      <th scope="col">category</th>
      <th scope="col">description</th>
      <th scope="col">price</th>
      <th scope="col"> actions</th>


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
      <td>
        <button class="btn btn-danger" wire:click="deleteProduct({{$product->id}})"> Elimina</button>
        <button class="btn btn-success"> Accetta</button>
        <a class="btn btn-warning" href="{{route('products.edit', $product)}}"> Modifica</a>


      </td>



    </tr>
    @endforeach
  
   
  </tbody>
</table>

</div>

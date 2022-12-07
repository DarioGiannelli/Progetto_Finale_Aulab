<div class="col-12 col-md-4 my-5 d-flex justify-content-center">
  <div class="cardCust">
      <div class="imgbox">
          <div class="imgCust"></div>
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
                  <a href="{{route('categoryShow', $product->category)}}" class="caption">Categoria: {{$product->category->name}}</a>
              </div>
              <div class="col-12">
                  <span class="caption">Pubblicato il: {{$product->created_at->format('d/m/Y')}} - Autore :{{$product->user->name ?? ''}}</</span>
              </div>
              <div class="col-12 mt-2">
                  <a href="{{route('products.show', $product)}}" class="btn btn-primary btnCard">Visualizza</a> 
              </div>
          </div>
      </div>
  </div>
</div>
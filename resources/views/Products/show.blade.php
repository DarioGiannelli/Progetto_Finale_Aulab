<x-layout>
    <div class="container-fluid my-4 mt-5">
        <div class="row">
            <div class="col-12">
                <h1>Annuncio: {{$product->name}}</h1>
            </div>
        </div>
    </div>
     <div class="container">
        <div class="row">
            <div class="col-12">

            <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="https://picsum.photos/id/27/1200/200" class="img-fluid p-3 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="https://picsum.photos/id/28/1200/200" class="img-fluid p-3 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="https://picsum.photos/id/29/1200/200" class="img-fluid p-3 rounded" alt="...">
                    </div>
                </div>
            </div>

            <div class="container my-3">
                <div class="row">

                    <div class="col-6 text-center text-dark">
                        <img src="https://picsum.photos/200/300" alt="">
                    </div>

                    <div class="col-5 text-center text-dark">
    
                        <h5 class="card-title my-3 text-warning">{{$product->name}}</h5>
                        <div class="prodottoSingolo">
                            <p class="card-text my-3 ">Descrizione: {{$product->description}}</</p>
                            <p class="card-text my-3">{{$product->price}} €</</p>
                            <a href="{{route('categoryShow', $product->category)}}" class="btn btn-primary">Categoria {{$product->category->name}}</a>
                            <p class="card-footer my-3">Pubblicato il:{{$product->created_at->format('d/m/Y')}}</</p>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
    {{-- <div class="container my-4 mt-5">
        <div class="row">
            <div class="col-12">
         
                <section class="product prodottoSingolo my-3">
	                <div class="product__photo">
		                <div class="photo-container">
			                <div class="photo-main">
				                <div class="controls">
					                <i class="material-icons">share</i>
					                <i class="material-icons">favorite_border</i>
				                </div>
				                <img src="https://res.cloudinary.com/john-mantas/image/upload/v1537291846/codepen/delicious-apples/green-apple-with-slice.png" alt="green apple slice">
			                </div>
			        <div class="photo-album">
				        <ul>
					        <li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302064/codepen/delicious-apples/green-apple2.png" alt="green apple"></li>
					        <li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303532/codepen/delicious-apples/half-apple.png" alt="half apple"></li>
					        <li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303160/codepen/delicious-apples/green-apple-flipped.png" alt="green apple"></li>
					        <li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303708/codepen/delicious-apples/apple-top.png" alt="apple top"></li>
				        </ul>
			        </div>

		                </div>
	                </div>

	                <div class="product__info">
		                <div class="title">
			                <h1>{{$product->name}}</h1>
			                <span>COD: 45999</span>
		                </div>

		                <div class="price">
			                <span>{{$product->price}}  €</span>
		                </div>

		                <div class="variant">
			                <h3>SELECT A COLOR</h3>
			                <ul>
				                <li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302064/codepen/delicious-apples/green-apple2.png" alt="green apple"></li>
				<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302752/codepen/delicious-apples/yellow-apple.png" alt="yellow apple"></li>
				<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302427/codepen/delicious-apples/orange-apple.png" alt="orange apple"></li>
				<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302285/codepen/delicious-apples/red-apple.png" alt="red apple"></li>
			</ul>
		</div>
		<div class="description">
			<h3>Descrizione</h3>
			
            <p class="mx-3">{{$product->description}}</p>
               
            <h3>Caricato da:</h3>

            <p>{{$product->user->name}} - {{$product->created_at->format('d/m/Y')}}</p>

            <h3>Categoria:</h3>

            <a href="{{route('categoryShow', $product->category)}}" class="btn btn-primary">Categoria {{$product->category->name}}</a>
            
		</div>
		<button class="buy--btn">ADD TO CART</button>
	</div>
</section>

            </div>
        </div>
    </div> --}}

</x-layout>
<x-layout>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7">
                <div class="container">
                    <div class="row create-form">
                       <div class="col-12 col-md-9 text-center">
                            <h1 class="h1-cust">Crea l'annuncio del prodotto inserendo i vari parametri</h1>
                        </div>
                        <div class="col-12 col-md-3 d-flex justify-content-center my-3 order-md-first">
                            <i class="fa-solid fa-cart-plus fa-2x d-flex flex-column justify-content-center"></i>
                        </div>
                        <div class="col-12">
                            <livewire:create-product>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-5">
                <h2>
                    immagine
                </h2>
            </div> --}}
        </div>
    </div>  

</x-layout>

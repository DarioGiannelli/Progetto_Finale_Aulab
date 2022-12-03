<div class="container my-5">
    <div class="row">
        <div class="col-7">
            <div class="container">
                <div class="row create-form">
                    <div class="col-3">
                        <i class="fa-solid fa-cart-plus fa-2x"></i>
                    </div>
                    <div class="col-9 text-center">
                        <h1 class="h1-cust">Crea l'annuncio del prodotto</h1>
                    </div>
                    <div class="col-12">
                        <form action="{{ route('welcome') }}" method="POST"> 
                            <!-- @csrf -->
                            <div class="container my-2">
                                <div class="row justify-content-center">
                                    
                                    <div class="col-12">
                                        <input type="text" placeholder="inserisci il nome del prodotto" />
                                    </div>
                                    
                                    <div class="col-12">
                                        <input type="text" placeholder="inserisci il brand del tuo prodotto" />
                                    </div>
        
                                    <div class="col-12 d-flex justify-content-center">
                                        <textarea id="" cols="50" rows="10" placeholder="inserisci la descrizione del tuo prodotto"></textarea>
                                    </div>
        
                                    <div class="col-12">
                                        <input type="number" placeholder="inserisci il prezzo del prodotto" />
                                    </div>
                                </div>
                            
                            </div>
                
                            <button type="submit" class="btn-cust">clicca per inviarlo in revisione</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5">
            <h2>
                immagine
            </h2>
        </div>
    </div>
        

</div>

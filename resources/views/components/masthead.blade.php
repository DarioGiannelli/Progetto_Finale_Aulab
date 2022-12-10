 

<div id="header">

    <!--Content before waves-->

    <div class="inner-header flex">
    <!--Just the logo.. Don't mind this-->

    {{-- <svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">
    
    <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
    <g><path fill="#fff"
    d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
    C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
    c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7		c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2	c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
    </g>
    </svg> --}}
    <div class="container">
        <div class="row align-item-center">
            <div class="col-lg-6 text-lg-start d-flex flex-column align-items-center justify-content-center">
                <h1 id="titoloMasthead" class="d-flex mb-4 animated slideInDown display-1">PRESTO<span id="spanMasthead" class="span">.</span>it</h1>
                <p class=" pb-3 animated slideInDown fs-3 text-center">Tutto ciò che vuoi vendere ed acquistare... anche dal divano di casa!</p>
                @guest
                    <div>
                        <a href="{{ Route('login') }}" class="btn blu text-white py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Vendi subito</a>
                        <a href="{{ Route('login') }}" class="btn verde text-white py-sm-3 px-sm-5 rounded-pill animated slideInRight">Compra... PRESTO!</a>
                    </div>
                @endguest
                @auth
                <div>
                    <a href="{{ Route('products.create') }}" class="btn blu text-white py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Vendi subito</a>
                    <a href="{{ Route('products.index') }}" class="btn verde text-white py-sm-3 px-sm-5 rounded-pill animated slideInRight">Compra... PRESTO!</a>
                </div>
                @endauth
                
                
            </div>
            <div id="mastheadWrapper" class="col-lg-6 text-lg-start d-flex jusify-content-center">
                
                 <img id="immagineMasthead" class="img-fluid img-cust" src="img/masthead1_.jpg" alt="">
                <!-- <img id="immagineMastheadNatale" class="img-fluid img-cust" src="img/cappelloMasthead.png" alt="">  -->

            </div>
        </div>
    </div>
    
    

</div>
    
    <!--Waves Container-->
    <div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
    </g>
    </svg>
    </div>
    <!--Waves end-->
    
</div>
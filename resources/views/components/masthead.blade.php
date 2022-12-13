 

<div id="header">

    <!--Content before waves-->

    <div class="inner-header flex">
    
    <div class="container">
        <div class="row align-item-center">
            <div class="col-lg-6 text-lg-start d-flex flex-column align-items-center justify-content-center">
                <h1 id="titoloMasthead" class="d-flex mb-4 animated slideInDown display-1 mt-5 mt-md-0">PRESTO<span id="spanMasthead" class="span">.</span>it</h1>
                <p class=" pb-3 animated slideInDown fs-3 text-center">{{ __('ui.masthead')}}</p>
                @guest
                    <div>
                        <a href="{{ Route('login') }}" class="btn blu text-white py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">{{__('ui.vendi')}}</a>
                        <a href="{{ Route('login') }}" class="btn verde text-white py-sm-3 px-sm-5 rounded-pill animated slideInRight">{{__('ui.compra')}}</a>
                    </div>
                @endguest
                @auth
                <div>
                    <a href="{{ Route('products.create') }}" class="btn blu text-white py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">{{__('ui.vendi')}}</a>
                    <a href="{{ Route('products.index') }}" class="btn verde text-white py-sm-3 px-sm-5 rounded-pill animated slideInRight">{{__('ui.compra')}}</a>
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
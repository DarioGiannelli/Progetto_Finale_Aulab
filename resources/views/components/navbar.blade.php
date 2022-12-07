<!-- NAVBAR-->



<nav id="navbar" class="navbar navbar-expand-lg bg-light sticky-top">
  <div class="container-fluid">

        {{-- <button id="darkMode" class="me-3 my-3 btn btn-dark togglerDark d-flex justify-content-center align-items-center">
            <i id="bulb" class="fa-solid fa-lightbulb "></i>
        </button> --}}

      <h1 id="titoloNav" class="m-0 text-primary">PRESTO<span class="span">.</span>it</h1>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button> -->
      <button class="navbar-toggler my-3 mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <!-- <span class="navbar-toggler-icon"></span> -->
      <i id="arrow" class="fa-solid fa-arrow-down"></i>
    </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
                
                    
                
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ Route('products.index') }}">Annunci</a>
              </li>
              {{-- @guest
                  <li class="nav-item">
                      <a href="{{ route('register') }}" class="nav-link active">Registrati</a>
                  </li>  
              @endguest --}}

             
              @auth
           
              <li class="nav-item">
                  <a href="" class="nav-item nav-link active">Bentornato {{ Auth::user()->name }}</a>
              </li>
             
              <li class="nav-item">
                  <a href="{{ Route('products.create') }}" class="nav-link active">Crea annuncio</a>
              </li>
              @if(Auth::user()->is_revisor)
              <li class="nav-item position-relative">
                  <a href="{{Route('revisor.index')}} " class="nav-item nav-link active">Zona Revisore 
                    <span class="position-absolute top-0  start-100 translate-middle badge rounded-pill bg-danger">
                        {{ App\Models\Product::toBeRevisionedCount()}}
                         <span class="visually-hidden">unread Messages</span> 
                    </span>
                  </a>
              </li> 
              @endif
              @endauth
            
            
              
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categorie prodotti
                  </a>
                  <ul class="dropdown-menu">
                      @foreach ($categories as $category)
                          <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                      @endforeach                
                  </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link">Chi Siamo</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link">Contattaci</a>
              </li>

          </ul>

          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
            <!-- <div class="btnAuth ms-auto"> -->
            @guest

            <li class="nav-item ms-5 ms-lg-0">
                <a href="{{ Route('login') }}" class="linkAuth verde nav-link btn rounded-pill my-2 py-2 px-4 me-3 d-lg-block">Login</a>
              </li>

              <li class="nav-item ms-5 ms-lg-0">
                <a href="{{ Route('register') }}" class="linkAuth giallo nav-link btn rounded-pill my-2 py-2 px-4 me-3 d-lg-block">Registrati</a>
              </li>

            @endguest
            @auth

            <li class="nav-item ms-5 ms-lg-0">
                <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="linkAuth btn rosso rounded-pill py-2 px-4  ms-auto">Logout</button>
                </form>
              </li>
            @endauth
            <!-- </div> -->
            
            
        </ul>
        <form class="d-flex" method="GET" action="{{route('products.search')}}">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="searched">
        <button class="btn btn-outline-success" type="submit">Cerca</button>
      </form>
          
          
      </div>
  </div>
</nav>


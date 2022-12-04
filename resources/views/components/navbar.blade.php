<!-- NAVBAR-->



<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">


      <h1 class="m-0 text-primary">PRESTO<span class="span">.</span>it</h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
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
          <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
          
          <div class="d-flex">
            @guest
              <a href="{{ Route('login') }}" class="btn btn-success rounded-pill py-2 px-4 me-3 d-none d-lg-block">Login</a>
              <a href="{{ Route('register') }}" class="btn btn-warning rounded-pill py-2 px-4 me-3 d-none d-lg-block">Registrati</a>

            @endguest
            @auth
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-danger rounded-pill py-2 px-4 me-3 d-none d-lg-block">Logout</button>
              </form>
            @endauth
          </div>
      </div>
  </div>
</nav>


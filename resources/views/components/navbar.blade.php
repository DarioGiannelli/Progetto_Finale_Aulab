<!-- NAVBAR-->

<div class="container">
  <div class="row">
    <div class="col-12">

      <nav class="navbar navbarCustom navbar-expand-lg bg-light">

        <div class="container">

          <a class="navbar-brand titoloNavbar" href="#"><em> Presto<span class="span">.</span>it </em> </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ Route('home') }}">Home</a>
            </li>

          @guest

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ Route('register') }}">Registrati</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ Route('login') }}">Login</a>
            </li>
          
          @endguest

          @Auth

            <li class="nav-item">
              <a class="nav-link" aria-current="page"> Bentornato {{ Auth::user()->name }}</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('create.product') }}"> Prodotto <span class="span">+</span> </a>
            </li>

          @endAuth

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Prodotti
            </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="">Sport</a></li>
          <li><a class="dropdown-item" href="">Motori</a></li>
          <li><a class="dropdown-item" href="">Elettronica</a></li>
          <li><a class="dropdown-item" href="">Casa</a></li>
          <li><a class="dropdown-item" href="">Console e Videogames</a></li>
          <li><a class="dropdown-item" href="">Fai da te</a></li>
          <li><a class="dropdown-item" href="">Abbigliamento</a></li>
          <li><a class="dropdown-item" href="">Salute</a></li>
          <li><a class="dropdown-item" href="">Multimedia</a></li>
          <li><a class="dropdown-item" href="">Libri</a></li>
          <li><a class="dropdown-item" href="">Infanzia</a></li>
          <li><a class="dropdown-item" href="">Animali</a></li>
        </ul>
      </li>

      @auth 

      <li class="nav-item me-2">
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-primary">Logout</button>
          </form>
        </li>

      @endauth
      
    </ul>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</div>
</nav>

      </div>
    </div>
  </div>

  
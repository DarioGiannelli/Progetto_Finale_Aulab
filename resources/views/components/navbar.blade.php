<!-- NAVBAR-->
      <nav class="navbar navbarCustom navbar-expand-lg bg-light">

        <div class="container">

          <a class="navbar-brand titoloNavbar" href="#"><em> Presto<span class="span">.</span>it </em> </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item a-cust">
              <a class="nav-link active" aria-current="page" href="{{ Route('home') }}">Home</a>
            </li>

          @guest

            <li class="nav-item a-cust">
              <a class="nav-link" aria-current="page" href="{{ Route('register') }}">Registrati</a>
            </li>

            <li class="nav-item a-cust">
              <a class="nav-link" aria-current="page" href="{{ Route('login') }}">Login</a>
            </li>
          
          @endguest

          @Auth

            <li class="nav-item a-cust">
              <a class="nav-link" aria-current="page"> Bentornato {{ Auth::user()->name }}</a>
            </li>

            <li class="nav-item a-cust">
              <a class="nav-link" aria-current="page" href="{{ Route('product.create') }}"> Prodotto <span class="span">+</span> </a>
            </li>

          @endAuth

            <li class="nav-item dropdown a-cust">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Prodotti</a>
              <ul class="dropdown-menu">
                @foreach ($categories as $category)
                  <li><a class="dropdown-item" href="">{{$category->name}}</a></li>
                @endforeach
              </ul>
            </li>    
    </ul>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    @auth 
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn-danger ms-5">Logout</button>
      </form>
    @endauth
  </div>
</div>
</nav>
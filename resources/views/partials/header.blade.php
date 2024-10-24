<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary fw-bold text-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route("home-page")}}">
                <img src="{{ Vite::asset("resources/img/dc-logo.png")}}" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
            </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Characters</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("comics.index")}}">Comics</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Movies</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Tv</a>
                </li> <li class="nav-item ">
                    <a class="nav-link" href="#">Games</a>
                </li> <li class="nav-item ">
                    <a class="nav-link" href="#">Collectibles</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Videos</a>
                </li> <li class="nav-item ">
                    <a class="nav-link" href="#">Fans</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link dropdown-toggle" href="#">Shop</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
</header>

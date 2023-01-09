<nav class="navbar navbar-expand-lg bg-info mb-4">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item {{Route::currentRouteName()=== 'home' ? 'active' : ''}}">
            <a class="nav-link" aria-current="page" href="{{ route('home')}}">Home</a>
          </li>
          <li class="nav-item {{Route::currentRouteName()=== 'about' ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('about')}}">About Us</a>
          </li>
          <li class="nav-item {{Route::currentRouteName()=== 'lista-films' ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('lista-films')}}">Lista Films</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

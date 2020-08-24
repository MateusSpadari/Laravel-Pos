<nav class="navbar navbar-expand navbar-dark" style="background-color: #2c3e50;">
  <div class="navbar-nav w-100">
    <a class="navbar-brand text-color" href="/">Hotéis Guairacá</a>
    <a class="nav-item nav-link" href="/hotels">Pesquisar hotéis</a>

    @if(Route::has('login'))
    <div class="ml-auto">
      @auth
      <a class="nav-item nav-link" href="{{ route('logout') }}">Sair</a>
      @else
      <a class="nav-item nav-link" href="{{ route('login') }}">Entrar</a>
      @endauth
    </div>
    @endif
    
  </div>
</nav>
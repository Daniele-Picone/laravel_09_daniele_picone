<nav class="navbar">
    <div class="start">
    <div class="logo">
        <h1>CyberNexus</h1>
    </div>
    <div class="links">
        <ul>
            <li><a href="{{route('homepage')}}">Homepage</a></li>
            <li><a href="{{route('articles')}}">Articoli</a></li>
            @auth
            <li><a href="{{route('add.articles')}}">Aggiungi articolo</a></li>
            <li class="nav-item">
          <form 
           action="{{route('logout')}}"
           method="POST"> 

            @csrf
             <button class="nav-link type="submit" >Loguot</button>
            </form>
        </li>
            @endauth
        </ul>
    </div>
    </div>

    <div class="end">
    <div class="profile">
        @guest
    <i class="bi bi-search"></i>
    <p>Accedi/Registrati</p>
    @endguest
    @auth
    <p><a class="nav-link" href="#">{{Auth::user()->name}}
    </a></p>
    @endauth
    <a href="{{route('lounge')}}"><i class="bi bi-person-circle"></i></a>
    </div>
    </div>
</nav>
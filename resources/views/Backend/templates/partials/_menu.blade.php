  <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item {{active_route('home')}}">
        <a class="nav-link" href="{{route('home')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Tableau de bord</span>
        </a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-film"></i>
          <span>Médiathèques</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="{{route('admingalerie')}}">Albums</a>
          <a class="dropdown-item" href="{{route('adminphotos')}}">Photos</a>
          <!-- <a class="dropdown-item" href="{{route('adminvideos')}}">Videos</a> -->
        </div>
      </li>
      
       @if(Auth::user()->poste=="Administrateur")
      <li class="nav-item dropdown {{ active_route('inscription') }} {{ active_route('allUsers') }}">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-users"></i>
          <span>Utilisateurs</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="{{ route('inscription') }}">Ajout</a>
          <a class="dropdown-item" href="{{ route('allUsers') }}">Lister</a>
        </div>
      </li>
      @endif
    </ul>
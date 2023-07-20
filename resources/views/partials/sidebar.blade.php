
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
          <img src="/img/logo/RENTCAR HAMZA.png">
        </div>
        <div class="sidebar-brand-text mx-3 " style="color:black ;font-size:24px">Location</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href={{'/'}}>
          <i class="fas fa-home" style='font-size:20px'></i>
          <span style='font-size:15px'>Acceuil</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
      </div>
      @auth
      <li class="nav-item active">
          <a class="nav-link" href="{{route('users.profile',auth()->user()->id)}}">
            <i class="fas fa-user" style='font-size:20px'></i>
            <span style='font-size:15px'>{{auth()->user()->name}}</span>
          </a>
      </li>
      @if(auth()->user()->isAdmin())
      <li class="nav-item active">
           <a class="nav-link" href="{{route('admins.index')}}">
            <i class="fas fa-user" style='font-size:20px'></i>
            <span style='font-size:15px'>Administrateur</span>
           </a>
      </li>
      @endif
      <li class="nav-item active">
        <a class="nav-link" href={{url('/end')}}>
          <i class="fas fa-sign-out-alt" style='font-size:20px'></i>
          <span style='font-size:15px'>deconnexion</span></a>
      </li> 
      @else
      <li class="nav-item active">
        <a class="nav-link" href="{{route('users.register')}}">
          <i class="fas fa-user-plus" style='font-size:20px'></i>
          <span style='font-size:15px'>Inscription</span></a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="{{route('users.login')}}">
          <i class="fas fa-sign-in-alt" style='font-size:20px'></i>
          <span style='font-size:15px'>connexion</span></a>
      </li>
      @endauth
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>

  
                          
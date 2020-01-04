<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#66cfff">
    <a class="navbar-brand mr-5" href="{{url('/')}}">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Frontdesk <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav-link" href="#">HouseKeeping</a>
        </li>
        <form class="form-inline my-2 my-lg-0 ml-5">
            <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-sm btn-outline-info" type="submit">Search</button>
          </form>
        
        
      </ul>
      <ul class="navbar-nav">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Person
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Login</a>
            <a class="dropdown-item" href="#">Logout</a>
            {{-- <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a> --}}
          </div>
        </li>
      </ul>
    </div>
  </nav>
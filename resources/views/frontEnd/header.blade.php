@yield('content')
<header class="headerFront">
  <div id="Logo row">
      <img class="col-lg-6 col-md-6 col-sm-12" height="50" src="{{ URL::to('/img_front/logo.png') }}">
  </div>
  <div class="container">
    
      <nav class="nav-front navbar-expand-lg navbar-light bg-light">          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Roms
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Super Nintendo</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>           
                  </div>  
                </li>  
                <li class="nav-item active">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Roms
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>           
                    </div> 
                  </li>                
                </div>
                </ul>
        </nav>
      </div>   
</header>



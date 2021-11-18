    
    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>
    <nav class="menu midhead">
    

    <div class="menu-branding">
         <div class="portrait"></div>
    </div>

      <ul class="menu-nav">
        <li class="nav-item">
          <a class="nav-link" href="/"> HOME <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/work"> MY WORK </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/music"> MUSIC <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/about"> ABOUT ME </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/contact"> HOW TO REACH ME <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" id="gallarydropdown" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
            GALLARY
          </a>

          <div class="dropdown-menu">
            <a class="dropdown-item" href="/">Birthday Photos</a>
            <a class="dropdown-item" href="/">Family Photos</a>
            <a class="dropdown-item" href="/gallary">Personal</a>
          </div>

        </li>

        <li>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn-lg btn-outline-light btn" type="submit">Search</button>
              </form>
        </li>

      </ul>

      

  </nav>


{{-- from _script.blade.php / to link jquery--}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous">

<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>

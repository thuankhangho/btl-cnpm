<nav class="navbar navbar-light bg-light">
  <div class="col-sm-3">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
      <span class="navbar-toggler-icon"></span>
    </button>

  </div>
  <div class="mx-auto order-0">
    <a class="navbar-brand" href="index">
      <img src="../public/assets/img/logo.png" width="50" height="50" class="d-inline-block align-top" alt="">   
    </a>
  </div>
  
  <!-- Icon dropdown -->
  <div class="dropdown col-sm-3 d-flex flex-row-reverse">

    <a href="#" class="align-items-center text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false" style="padding-right: 15px">
      <span class="d-none d-sm-inline mx-1">
        Admin
      </span>      
    </a>    
    <img src="../public/assets/img/logo.png" alt="hugenerd" width="40" height="40" class="rounded-circle border border-info img-thumbnail">
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
      <li><span class="dropdown-item"><?=Auth::user()?></span></li><br>
      <li><a class="dropdown-item" href="profile">Profile</a></li>
      <li><a class="dropdown-item" href="logout">Logout</a></li>
    </ul>
  </div>
  <!-- Side Nav Bar -->
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">UWC 2.0</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <a class="nav-link" href="index">Home</a>
      <a class="nav-link" href="about">About</a>
      <a class="nav-link" href="#">Task Board</a>
      <a class="nav-link" href="#">Schedule</a>
    </div>
  </div>
  <!-- Side Nav Bar -->
  
</nav>
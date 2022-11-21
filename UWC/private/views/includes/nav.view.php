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
  <div class="dropdown col-sm-3">
    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false" style="justify-content: right; align-items: right; padding-right: 15px">
      <img src="../public/assets/img/logo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
      <span class="d-none d-sm-inline mx-1">
        <?=Auth::user()?>
      </span>
    </a>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
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
      <a class="nav-link" href="index">&nbsp;&nbsp;Home&nbsp;&nbsp;</a>
      <a class="nav-link" href="about">&nbsp;&nbsp;About&nbsp;&nbsp;</a>
      <a class="nav-link" href="#">&nbsp;&nbsp;Task Board&nbsp;&nbsp;</a>
      <a class="nav-link" href="#">&nbsp;&nbsp;Schedule&nbsp;&nbsp;</a>
    </div>
  </div>
  <!-- Side Nav Bar -->
  
</nav>
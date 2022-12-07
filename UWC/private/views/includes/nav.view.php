<nav class="navbar navbar-light bg-light">
  <div class="col-sm-3">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
      <span class="navbar-toggler-icon"></span>
    </button>

  </div>
  <div class="mx-auto order-0">
    <a class="navbar-brand" href="<?=ROOT?>">
      <img src="<?=ROOT?>/assets/img/logo.png" width="50" height="50" class="d-inline-block align-top" alt="">   
    </a>
  </div>
  
  <!-- Icon dropdown -->
  <div class="dropdown col-sm-3 d-flex flex-row-reverse">
    <?php if (Auth::logged_in()): ?>
    <a href="#" class="align-items-center text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false" style="padding-right: 15px">
      <span class="d-none d-sm-inline mx-1">
        <?=Auth::user('fullname')?><br>
        <?=Auth::user('email')?>
      </span>      
    </a>    
    <img src="<?=ROOT?>/assets/img/logo.png" alt="hugenerd" width="48" height="48" class="rounded-circle border border-info img-thumbnail d-none d-sm-inline mx-1">
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
      <li><span class="dropdown-item"><?=Auth::user()?></span></li><hr>
      <li><a class="dropdown-item" href="<?=ROOT?>/profile">Profile</a></li>
      <li><a class="dropdown-item" href="<?=ROOT?>/logout">Logout</a></li>
    </ul>
    <?php endif; ?>
  </div>
  
  <!-- Side Nav Bar -->
  <div class="offcanvas offcanvas-start rounded-lg" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Urban Waste Management System</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <hr>
    <div class="offcanvas-body">
      <ul class="nav nav-pills center-pills flex-column mb-auto bx-ul">
        <li><a class="nav-link" href="<?=ROOT?>"><box-icon name='home-alt'></box-icon>&nbsp; Home</a></li>
        <li><a class="nav-link" href="<?=ROOT?>/dashboard"><box-icon name='home'></box-icon>&nbsp; Dashboard</a></li>
        <li><a class="nav-link" href="<?=ROOT?>/tasks"><box-icon name='task'></box-icon>&nbsp; Tasks</a></li>
        <!-- <li><a class="nav-link" href="<?=ROOT?>/messages"><box-icon name='envelope' type='solid' ></box-icon>&nbsp; Messages</a></li> -->
        <!-- <li><a class="nav-link" href="<?=ROOT?>/notifications"><box-icon name='bell' ></box-icon>&nbsp; Notifications</a></li> -->
        <li><a class="nav-link" href="<?=ROOT?>/employees"><box-icon name='user' ></box-icon>&nbsp; Employees</a></li>
        <li><a class="nav-link" href="<?=ROOT?>/settings"><box-icon name='cog' ></box-icon>&nbsp; Settings</a></li>
      </ul>
    </div>
    <hr>
  </div>
  <!-- Side Nav Bar -->
  
</nav>
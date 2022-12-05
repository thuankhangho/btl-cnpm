<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="my-container" style="padding: 20px;">
  <div>
    <h3 class="h-100 d-flex align-items-center justify-content-center">Admin Dashboard</h3>
  </div>
  <div class="boxes">
    <div class="row">
      <a class="col-sm-3 rounded p-2" href="notifications" style="background-color: #FFF8E5;">
        <div class="p-2">
        <div class="circle1 my-circle">
            <box-icon name='bell' class="bell1"></box-icon>
        </div>
            <div>
              <h5>Notifications</h5>
              <div class="small-text">6 Unread Notifications</div>
            </div>
        </div>
      </a>
      <a class="col-sm-3 rounded p-2" href="task" style="background-color: #E4F8EB;">
      <div class="p-2">
        <div class="circle2 my-circle">
            <box-icon name='bell' class="bell1"></box-icon>
        </div>
        <div>
              <h5>Tasks</h5>
              <div class="small-text">4 Projects Last Updated</div>
            </div>
        </div>
      </a>
      <a class="col-sm-3 rounded p-2" href="employees" style="background-color:#EBE8FE">
      <div class="p-2">
        <div class="circle3 my-circle">
            <box-icon name='bell' class="bell1"></box-icon>
        </div>
        <div>
              <h5>Employees</h5>
              <div class="small-text">5 Employees on Standby</div>
            </div>
        </div>
      </a>
      <a class="col-sm-3 rounded p-2" href="#" style="background-color: #3C21F7">
      <div class="p-2">
        <div class="circle4 my-circle">
            <box-icon name='bell' class="bell1"></box-icon>
        </div>
        <div>
              <h5 style="color:white">MCPs</h5>
              <div class="small-text" style="color:white">3 MCPs ready to be emptied</div>
            </div>
        </div>
      </a>
    </div>
  </div>
  <div class="container-2">
    <div class="row">
      <div class="container-notif col-6">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Notifications</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
            </tr>
            <tr>
              <th scope="row">2</th>
            </tr>
            <tr>
              <th scope="row">3</th>
            </tr>
          </tbody>
        </table>
      </div>
        <div class="daily-task col-6">
        <table class="table table-hover">
                <thead>
                <tr>
                <th scope="col">Notifications</th>
                </tr>
                </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                </tr>
                <tr>
                <th scope="row">2</th>
                </tr>
                <tr>
                <th scope="row">3</th>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
      
  </div>

</div>
<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="my-container" style="padding: 20px;">
  <div>
    <h3>Admin Dashboard</h3>
  </div>
  <div class="boxes">
    <div class="row">
      <a class="col-sm-2 rounded p-2" href="notifications" style="background-color: #FFF8E5;">
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
      <a class="col-sm-2 rounded p-2" href="task" style="background-color: #E4F8EB;">
      <div class="p-2">
        <div class="circle2 my-circle">
            <box-icon name='bell' class="bell1"></box-icon>
        </div>
        <div>
              <h5>Tasks</h5>
              <div class="small-text">Lorem Ipsum</div>
            </div>
        </div>
      </a>
      <a class="col-sm-2 rounded p-2" href="employees" style="background-color:#EBE8FE">
      <div class="p-2">
        <div class="circle3 my-circle">
            <box-icon name='bell' class="bell1"></box-icon>
        </div>
        <div>
              <h5>Employee</h5>
              <div class="small-text">Lorem Ipsum</div>
            </div>
        </div>
      </a>
      <a class="col-sm-2 rounded p-2" href="#" style="background-color: #3C21F7">
      <div class="p-2">
        <div class="circle4 my-circle">
            <box-icon name='bell' class="bell1"></box-icon>
        </div>
        <div>
              <h5>Create New</h5>
              <div class="small-text">Task</div>
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
<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="my-container" style="padding: 20px;">
  <div>
    <h3>Admin Dashboard</h3>
  </div>
  <div class="boxes">
    <div class="row">
      <a class="col-sm-2 rounded" href="notifications" style="background-color: #FFF8E5;">
        <div class="p-2 well bg rounded">
        <div class="circle1">
            <box-icon name='bell' class="bell1"></box-icon>
        </div>
        </div>
      </a>
      <a class="col-sm-2 rounded" style="background-color: #E4F8EB;">
      <div class="well bg rounded">
        <div class="circle1">
            <box-icon name='bell' class="bell1"></box-icon>
        </div>
        </div>
      </a>
      <a class="col-sm-2 rounded" style="background-color:#EBE8FE">
      <div class="well bg rounded">
        <div class="circle1">
            <box-icon name='bell' class="bell1"></box-icon>
        </div>
        </div>
      </a>
      <a class="col-sm-2 rounded" style="background-color: #3C21F7">
      <div class="well bg rounded">
        <div class="circle1">
            <box-icon name='bell' class="bell1"></box-icon>
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
<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<head>
  <title>Profile</title>
</head>
<div class="h-100 h-custom" style="background-image:url(<?=ROOT?>/assets/img/bg-form.jpg);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="<?=ROOT?>/assets/img/head-bg-form.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Profile</h3>

            <form action="" method="post" class="px-md-2">
              <div class="form-outline mb-4">
                <label class="form-label" for="username">Username</label>
                <input type="text" name="username" value="<?=$profile->username?>" id="username" class="form-control" required>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="fullname">Full name</label>
                <input type="text" name="fullname" value="<?=$profile->fullname?>" id="fullname" class="form-control" required>
              </div>
              <div class="form-outline mb-4">
                <label for="gender" class="form-label">Gender:</label>
                <input type="text" name="gender" value="<?=($profile->gender) ? 'Female' : 'Male';?>" id="username" class="form-control" required>
              </div>
              <div class="form-outline mb-4">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="text" name="birthday" value="<?=$profile->birthday?>" class="form-control" required>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="occupation" required>Occupation</label>
                <input type="text" name="occupation" value="<?=$profile->occupation?>" id="username" class="form-control" required>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="email" required>Email</label>
                <input type="email" name="email" value="<?=$profile->email?>" id="email" class="form-control"/>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="phone" required>Phone</label>
                <input type="text" name="phone" value="<?=$profile->phone?>" id="phone" class="form-control"/>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="address" required>Address</label>
                <input type="text" name="address" value="<?=$profile->address?>" id="address" class="form-control"/>
              </div>
              
              <div class="d-flex justify-content-center align-items-center">
                <?php
                  if ($profile->id != Auth::user('id'))
                ?>
                <a href="<?=($profile->id != Auth::user('id')) ? ROOT.'/employees' : ROOT?>" class="btn btn-primary">Go back</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
<?php $this->view('includes/footer') ?>
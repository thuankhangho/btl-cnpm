<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>
<head>
  <title>Sign up</title>
</head>
<div class="h-100 h-custom" style="background-image:url(<?=ROOT?>/assets/img/bg-form.jpg);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="<?=ROOT?>/assets/img/head-bg-form.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Sign up</h3>
            
            <?php if (count($errors) > 0): ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ERROR!</strong>
                <?php foreach($errors as $error): ?>
                  <br><?=$error?>
                <?php endforeach; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>

            <form action="" method="post" class="px-md-2">
              <div class="form-outline mb-4">
                <label class="form-label" for="username">Username</label>
                <input type="text" name="username" value="<?=get_var('username')?>" id="username" class="form-control" required>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="password" required>Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="fullname">Full name</label>
                <input type="text" name="fullname" value="<?=get_var('fullname')?>" id="fullname" class="form-control" required>
              </div>
              <div class="form-outline mb-4">
                <label for="gender" class="form-label">Gender:</label>
                <select class="select" name="gender" required>
                  <option <?=get_select('gender', 0)?> value=0>Male</option>
                  <option <?=get_select('gender', 1)?> value=1>Female</option>
                </select>
              </div>
              <div class="form-outline mb-4">
                <div class="form-outline datepicker">
                  <label for="birthday" class="form-label">Birthday</label>
                  <input type="date" name="birthday" value="<?=get_var('birthday')?>" class="form-control" min="1912-01-01" max="2012-12-31" required>
                </div>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="occupation" required>Occupation</label>
                <select class="select" name="occupation" required>
                  <!-- <option <?=get_select('occupation', 'Back officer')?> value="Back officer">Back officer</option> -->
                  <option <?=get_select('occupation', 'Collector')?> value="Collector">Collector</option>
                  <option <?=get_select('occupation', 'Janitor')?> value="Janitor">Janitor</option>
                  <!-- <option <?=get_select('occupation', 'Admin')?> value="Admin">Admin</option> -->
                </select>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="email" required>Email</label>
                <input type="email" name="email" value="<?=get_var('email')?>" id="email" class="form-control"/>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="phone" required>Phone</label>
                <input type="text" name="phone" value="<?=get_var('phone')?>" id="phone" class="form-control"/>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="address" required>Address</label>
                <input type="text" name="address" value="<?=get_var('address')?>" id="address" class="form-control"/>
              </div>
              <p class="text-center text-muted mt-5 mb-0">Already had an account? Go to <a href="login" class="fw-bold text-body"><u>Login</u></a></p><br>
              <div class="d-flex justify-content-center align-items-center">
                <input type="reset" value="Cancel" class="btn btn-danger btn-lg mb-1"></input>
                <button type="submit" class="btn btn-success btn-lg mb-1">Create An Account</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
<?php $this->view('includes/footer') ?>
<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>
<head>
  <title>Login</title>
</head>
<div class="h-100 h-custom" style="background-image:url(<?=ROOT?>/assets/img/bg-form.jpg);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="<?=ROOT?>/assets/img/head-bg-form.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Log in</h3>
            
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
                <label class="form-label" for="username" required>Username</label>
                <input type="text" name="username" id="username" value="<?=get_var('username')?>" class="form-control"/>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="password" required>Password</label>
                <input type="password" name="password" id="password" class="form-control"/>
              </div>
              <p class="text-center text-muted mt-5 mb-0">Haven't gotten an account? <a href="signup" class="fw-bold text-body">Sign up now!</a></p><br>
              <div class="d-flex justify-content-center align-items-center">
                <button type="submit" name="login" class="btn btn-success btn-lg">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->view('includes/footer') ?>
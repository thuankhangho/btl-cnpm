<?php $this->view('includes/header') ?>

<div class="h-100 h-custom my-container-log">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="../public/assets/img/ajisai.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Log in</h3>
            <form action="" method="post" class="px-md-2">
              <div class="form-outline mb-4">
                <label class="form-label" for="username" required>Username</label>
                <input type="text" name="username" id="username" class="form-control"/>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="password" required>Password</label>
                <input type="password" name="password" id="password" class="form-control"/>
              </div>
              <p class="text-center text-muted mt-5 mb-0">Haven't gotten an account? <a href="signup" class="fw-bold text-body">SIGN UP NOW</a></p><br>
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
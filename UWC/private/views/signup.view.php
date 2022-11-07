<?php $this->view('includes/header') ?>

<div class="h-100 h-custom" style="background-image:url(../public/assets/img/bg-form.jpg);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="../public/assets/img/ajisai.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Sign up</h3>
            <form action="" method="post" class="px-md-2">
              <div class="form-outline mb-4">
                <label class="form-label" for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="password" required>Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="fullname">Full name</label>
                <input type="text" name="fullname" id="fullname" class="form-control" required>
                <div class="error" style="color: red;"></div>
              </div>
              <div class="form-outline mb-4">
                <label for="gender" class="form-label">Gender:</label>
                <select class="select" name="gender" required>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Others">Others</option>
                </select>
              </div>
              <div class="form-outline mb-4">
                <div class="form-outline datepicker">
                  <label for="birthday" class="form-label">Birthday</label>
                  <input type="date" name="birthday" class="form-control" min="1912-01-01" max="2012-12-31" required>
                </div>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="occupation" required>Occupation</label>
                <select class="select" name="occupation" required>
                  <option value="Back officer">Back officer</option>
                  <option value="Collector">Collector</option>
                  <option value="Janitor">Janitor</option>
                  <option value="Admin">Admin</option>
                </select>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="email" required>Email</label>
                <input type="email" name="email" id="email" class="form-control"/>
                <div class="error" style="color: red;"></div>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="phone" required>Phone</label>
                <input type="text" name="phone" id="phone" class="form-control"/>
                <div class="error" style="color: red;"></div>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="address" required>Address</label>
                <input type="text" name="address" id="address" class="form-control"/>
                <div class="error" style="color: red;"></div>
              </div>
              <p class="text-center text-muted mt-5 mb-0">Already had an account? Go to <a href="login" class="fw-bold text-body"><u>Login</u></a></p><br>
              <div class="d-flex justify-content-center align-items-center">
                <input type="reset" value="Cancel" class="btn btn-danger btn-lg mb-1"></input>
                <button type="submit" name="signup" class="btn btn-success btn-lg mb-1">Create An Account</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
<?php $this->view('includes/footer') ?>
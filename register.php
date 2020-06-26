<?php include('inc/head.php') ?>
  <div class="login_form">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <h3 class="text-center mt-5">Register Now</h3>
          <div class="card shadow mt-3 mb-5">
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="first_name">First name</label>
                <input type="text" class="form-control" id="first_name">
              </div>
              <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text" class="form-control" id="last_name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="mobile_number">Mobile Number</label>
                <input type="number" class="form-control" id="mobile_number">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword2">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword2">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
              <p>Don't have an account? <a href="register.php">Register Now!</a></p>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
<?php include('inc/footer.php') ?>
<?php include('inc/head.php') ?>
  <div class="login_form">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <h3 class="text-center mt-5">Login to start your session</h3>
          <div class="card shadow mt-3 mb-5">
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
<!DOCTYPE html>
<html lang="en">
<title>Login | Zegoco</title>
<?php include 'include/header.php'; ?>

<body>
  <div class="container login-form">
    <div class="col-lg-6 offset-lg-3 col-sm-12 col-xs-12">
      <div class="card text-center rounded-lg">
        <div class="card-body">
          <h4 class="card-title mt-3">Login to Admin Panel</h4>
          <img src="assets/img/cmp-logo.png" class="img-fluid nav-image" alt="">
          <form class="p-4" method="post" action="dashboard.html">
            <p class="text-left">Email:</p>
            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
            <p class="text-left">Password:</p>
            <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
            <div class="custom-control custom-checkbox float-left">
              <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
              <label class="custom-control-label" for="defaultLoginFormRemember">Remember Me</label>
            </div>
            <div class="float-right">
              <a href="forgot-password.html">Forgot Password?</a>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-block my-4">Sign in</button>
            <p class="mt-1 text-muted text-sm float-right">Powered By: <img src="assets/img/logo.png" class="img-fluid hertzsoft-image" alt=""></p>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- ------------JavaScript Begins------------ -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
  <script src="assets/js/script.js"></script>
  <!-- ------------JavaScript Ends------------ -->

</body>

</html>
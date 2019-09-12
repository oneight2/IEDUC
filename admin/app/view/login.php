<?php

// session_start();
$notif = isset($url[1]) ? true : false;
if(isset($_SESSION['status'])){
echo "<script>
document.location.href='" . BASE_URL . "beranda';
</script>";
}
?>
<div class="container">
  <div class="card card-login mx-auto mt-5">
    <div class="card-header">Login</div>
    <div class="card-body">
      <form action="<?= BASE_URL."app/function/proses_login.php"; ?>" method="post">
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" id="inputEmail" class="form-control" placeholder="username" required="required" autofocus="autofocus" name="username">
            <label for="inputEmail">Username</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="password">
            <label for="inputPassword">Password</label>
          </div>
        </div>
        <div class="form-group">
          <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me">
              Remember Password
            </label>
          </div>
          <?php
          if($notif == true)
          echo "
          <label style='float: right;'>
            <div class='pink-text'>Maaf, username atau password yang kamu masukan tidak cocok</div>
          </label>";
          ?>
        </div>
        <button class="btn btn-primary btn-block"type="submit">Login</button>
      </form>
      <div class="text-center">
        <a class="d-block small mt-3" href="register.html">Register an Account</a>
        <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
      </div>
    </div>
  </div>
</div>
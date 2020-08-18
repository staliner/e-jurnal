<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Forgot Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/templates/Admin/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/templates/Admin/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/templates/Admin/') ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-image: url('<?= base_url('assets/img/background/auth/');?>bg.jpg');">
<div class="login-box " style="margin-left: -380px; margin-top: 30px;">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
        <div class="row">
        <div class="col">
          <img src="<?= base_url('assets/img/background/auth/');?>download.png" width="60">
        </div>
      </div>    
      <p class="login-box-msg" style="margin-top:-33px;">You forgot your password?</p>

      <form action="<?= base_url('Auth/Forgot_Password'); ?>" method="post">
        <div class="input-group">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div><?= form_error('email','<small class="text-danger ">','</small>'); ?>
        
        <div class="row mt-3">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1" style="margin-left: 250px;">
        <a href="<?= base_url('Auth/Login') ?>">Login</a>
      </p>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('assets/templates/Admin/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/templates/Admin/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/templates/Admin/') ?>dist/js/adminlte.min.js"></script>

</body>
</html>

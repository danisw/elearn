
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Elearn | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
    hold-transition login-page{
      width: 100%;
      height: 100%;
      background-color: red;
      
    }
  </style>
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Selamat Datang ! </b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="border-radius: 10px;">
    <p class="login-box-msg" style="color:white; ">Masukkan Username dan Password</p>

    <form action="<?php echo base_url();?>login/do_login" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="uname" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="pass" placeholder="Password">
        
        
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" name="login" value="Login" class="btn btn-warning btn-block btn-flat">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

        <!-- /.social-auth-links -->

   
   

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="<?=base_url()?>assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>

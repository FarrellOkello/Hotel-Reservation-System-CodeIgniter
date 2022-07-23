<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Front hotels sign up </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css')?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css')?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/iCheck/square/blue.css')?>">

    <!-- //php statements -->
    
  </head>
  <body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="../../index2.html"><b>Fronthotel signup</b></a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Please fill in your details</p>
        <?php echo form_open('dashboard/register');?>
        <!-- <form action="register.php" method="post"> -->
          
        <div class="form-group has-feedback">    
          <?php echo form_input(['name'=>'username','placeholder'=>'Username','class'=>'form-control',
			'required'=>'required']);?>          
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
          <?php echo form_input(['name'=>'email','placeholder'=>'Email','class'=>'form-control','required'=>'required']);?>
            <!-- <input type="text" class="form-control" placeholder="Title" name="p_title"> -->
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
          <?php echo form_input(['name'=>'password','placeholder'=>'Password','class'=>'form-control','required'=>'required']);?>
            <!-- <input type="textArea" class="form-control" placeholder="Description" name="p_description"> -->
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
              <?php echo form_input(['name'=>'mobile','placeholder'=>'Mobile','class'=>'form-control','required'=>'required']);?>
            <!-- <input type="time" class="form-control" placeholder="Time" name="p_time"> -->
            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
          </div>
          <!-- <div class="form-group has-feedback">
            <input type="date" class="form-control" placeholder="Date" name="date">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="file" class="form-control" placeholder="Image" name="imageUrl">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div> -->
          <div class="row">
            <div class="col-xs-8">
              <!-- <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> I agree to the <a href="#">terms</a>
                </label>
              </div> -->
            </div><!-- /.col -->
            <div class="col-xs-4">
            <?php echo form_submit(['name'=>'submit','value'=>'Sign up','class'=>'btn btn-primary btn-block btn-flat','required'=>'required']);?>
              <!-- <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button> -->
            </div><!-- /.col -->
          </div>
        </form>

        <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
        </div> -->
<a href="<?php echo base_url('dashboard/signin');?>" class="text-center">I already have an account</a>
        <!-- <a href="login.html" class="text-center">I already have a membership</a> -->
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('plugins/jQuery/jQuery-2.1.4.min.js')?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('plugins/iCheck/icheck.min.js')?>"></script>
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

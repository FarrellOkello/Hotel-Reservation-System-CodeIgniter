<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Welcome to bookersafrica</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/foundation.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('dist/css/skins/_all-skins.min.css');?>">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Bookersafrica!</h1>

	<div id="body">
<!-- <p>bookersafrica in place</p> -->
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">                
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown">Register property</a>
                  <ul class="dropdown-menu" role="menu">
									<li><a href="dashboard/propertyowner">Property</a></li>
					<li class="divider"></li>
                    <li><a href="dashboard/propertyOsignup">Signup as a property owner</a></li>
					<li class="divider"></li>
                    <li><a href="dashboard/propertyOsignin">Signin as a property owner</a></li>
					<li class="divider"></li>
                    <li><a href="dashboard/registerproperty">Register your property with us </a></li>
                    <li class="divider"></li>                
                  </ul>
                </li>
				<li class="dropdown">
                  <a href="dashboard/signup" >Signup</a>              
				<li class="dropdown">
                  <a href="dashboard/signin" >Signin</a>               
                </li>
				<li class="dropdown">
                  <a href="dashboard/contact" >Contact us</a>               
                </li>
				<li class="dropdown">
                  <a href="dashboard/logout" >Logout</a>               
                </li>
              </ul>
			  
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
				  <input type="text" class="form-control" 
				  id="navbar-search-input" placeholder="Search">
                </div>
              </form>
            </div><!-- /.navbar-collapse -->	<hr/>
<div class="small-12 medium-6 large-3 columns">
<div class="side-nav">
<?php $username = $this->session->userdata('username')?>
<h1 class="greeting">Welcome      <?php echo $username;?></h1>
</div>
<!-- <div class="small-12 medium-6 large-3 columns">
<div class="row">
<div > -->
<table><tr><th><?php echo $hotel->propertyName;?></th><th></th></tr>
<tr> <td> <img src=<?php echo $hotel->img;?> height='100' width='80'>
</td><td><?php echo $hotel->hotel_grade; ?></td></tr>
<tr><td>Ugx   <?php echo $hotel->price_per_night; ?></td>
<td>Tel.<?php echo $hotel->contact_no; ?></td><td>
<?php echo form_open_multipart('dashboard/update');?>
<?php echo form_input(['name'=>'propertyName','placeholder'=>'','value'=>'$posts->propertyName','class'=>'textbox']);?>
<label>Check in:
<?php echo form_input(['name'=>'search','placeholder'=>'Check in','class'=>'time','type'=>'date']);?>
</div>
</label>
<div class="large-2 medium-2 cell">
<label>Check out:
<?php echo form_input(['name'=>'search','placeholder'=>'check out','class'=>'textbox','type'=>'date']);?>
</div>
<!-- <?php echo anchor("dashboard/bookhotel","Book Now",['class'=>'button']);?></td></tr> -->
<tr></tr>

<?php echo form_submit(['name'=>'submit','value'=>'Update Property','class'=>'hollow button success']);?>
<?php echo form_error('post_blog','<div class="text-danger">,</div>');?>
</label>
<?php echo form_close();?>
<!-- </div> -->
<!-- <div class="row">
<img src=<?php echo $hotel->img;  ?>/>
</div> -->
<!-- <div class="row">
<p class="description"><?php echo $posts->propertyName; ?></p>
</div> -->

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
    <script src="<?php echo base_url('assets/js/vendor/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/what-input.js');?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/foundation.js');?>"></script>
    <script src="js/app.js"></script>
	<script src="<?php echo base_url('plugins/jQuery/jQuery-2.1.4.min.js');?>"></script>
<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
<script src="<?php echo base_url('plugins/fastclick/fastclick.min.js');?>"></script>
<script src="<?php echo base_url('dist/js/app.min.js');?>"></script>
<script src="<?php echo base_url('dist/js/demo.js');?>"></script>
</body>
</html>
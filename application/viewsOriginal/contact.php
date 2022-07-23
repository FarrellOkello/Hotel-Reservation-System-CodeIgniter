<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Welcome to fronthotels</title>
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
                background-color:grey:
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
<div class="navbar navbar-default">
<h1><img src="<?php echo base_url('assets/img/fronthotels.jpg');?>"
	height=35 width= 100>
	FRONT HOTELS</h1>
	
	<!-- <div id="body"> -->

<div  class="collapse navbar-collapse pull-left" id="navbar-collapse" >
<!--   -->
              <ul class="nav navbar-nav"> 
			  <li class="dropdown">
                  <a href="<?php echo base_url('dashboard');?>" >Home</a>               
                </li>               
                <li class="dropdown">           
                </li>
				<li class="dropdown">
                  <a href="<?php echo base_url('dashboard/registerproperty');?>" >Register property</a>              
				<li class="dropdown">
				<li class="dropdown">
                  <a href="<?php echo base_url('dashboard/signup');?>" >Signup</a>              
				<li class="dropdown">
                  <a href="<?php echo base_url('dashboard/signin');?>" >Signin</a>               
                </li>
				<li class="dropdown">
                  <a href="<?php echo base_url('dashboard/contact');?>" >Contact us</a>               
                </li>
				<li class="dropdown">
                  <a href="<?php echo base_url('dashboard/logout');?>" >Logout</a>               
                </li>
              </ul>
			  </div>
              <!-- <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                </div> -->
              </form>
			</div><!-- /.navbar-collapse -->	
			<hr/>
<div class="small-12 medium-6 large-3 columns">
<div class="side-nav">
<?php $username = $this->session->userdata('username')?>
<h1 class="greeting">Welcome      <?php echo $username;?></h1>
</div>
	</div>
<div class="grid-x grid-padding-x">
<div class="large-4 medium-4 cell">
<?php echo form_open('dashboard/sendContact');?>  
<fieldset><legend>Contact us</legend>	
	<!--<div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class="callout">-->    
   <b>Email:</b>support@fronttours.com<br/>
   <b>Mobile:</b> +256705263266 <br/>
   <b>Whatsapp:</b> +256754246970<br/>
   <?php echo form_open('dashboard/contact');?>
    <p>Name:*</p><?php echo form_input(['name'=>'name','placeholder'=>'','class'=>'textbox','required'=>'required']);?>
    <p>Email:*</p><?php echo form_input(['name'=>'email','placeholder'=>'','class'=>'textbox','required'=>'required']);?>
    <p>Message:*</p><?php echo form_textarea(['name'=>'message','placeholder'=>'','class'=>'textbox','required'=>'required']);?>
    <?php echo form_submit(['name'=>'submit','value'=>'Send us email',
'class'=>'btn btn-primary btn-block btn-flat']);?></fieldset>
    <?php echo form_close();?>
</div></div>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  '<strong>Oxy</strong>' : '' ?></p>
</div>

</body>
</html>
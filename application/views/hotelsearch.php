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
<div class="navbar navbar-default">
	<h1>Welcome to Bookersafrica!</h1>
	</div>
	<div id="body">
<!-- <p>bookersafrica in place</p> -->
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">                
                <li class="dropdown">           
                </li>
				<li class="dropdown">
                  <a href="dashboard/registerproperty" >Register property</a>              
				<li class="dropdown">
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
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                </div>
              </form>
            </div><!-- /.navbar-collapse -->	<hr/>
<div class="small-12 medium-6 large-3 columns">
<div class="side-nav">
<?php $username = $this->session->userdata('username')?>
<h1 class="greeting">Welcome      <?php echo $username;?></h1>
</div>
<div class="grid-x grid-padding-x">
<div class="large-3 medium-3 cell">
<?=form_open('dashboard/search');?>
<?php $search = array('name'=>'search','id'=>'search','value'=>'search',);?>
<?=form_input($search);?><input type=submit value='search' /></p>
<?=form_close();?>
<!-- <?php echo form_input(['name'=>'search','placeholder'=>'Your destination.......?','class'=>'textbox']);?>
</div>
<div class="large-2 medium-2 cell">
<?php echo form_input(['name'=>'search','placeholder'=>'Check in','class'=>'time','type'=>'date']);?>
</div>
<div class="large-2 medium-2 cell">
<?php echo form_input(['name'=>'search','placeholder'=>'check out','class'=>'textbox','type'=>'date']);?>
</div>
<div class="large-2 medium-2 cell">
<select name="adults" value="adults">
            <option value="monday">1-Adult</option>
            <option value="tuesday">2-Adult</option>
            <option value ="sunday">3-Adult</option>
          </select>
<!-- <?php echo form_input(['name'=>'search','placeholder'=>'adults','class'=>'textbox','type'=>'select']);?> -->
</div>
<div class="large-2 medium-2 cell">
<!-- <?php echo form_input(['name'=>'search','placeholder'=>'kids','class'=>'textbox']);?> -->
<select placeholder="kids">
            <option value="monday">1-Child</option>
            <option value="tuesday">2-Children</option>
            <option value ="sunday">3-Children</option>
			<option value ="sunday">4-Children</option>
			<option value ="sunday">5-Children</option>
          </select>
</div>
<div class="large-6 medium-6 cell">
<button class="hollow button primary textbox" click="">Search</button><br/><hr/>
</div>
</div>
<?php echo form_close();?> 
<table>
<tr><th>Name </th><th>grade</th><th>image</th><th>Contact</th><th>Location</th></tr>
<?php foreach($query as $item):?>
<tr>
<td><?= $item->propertyName ?></td>
<td><?= $item->hotel_grade ?></td>
<td><?= $item->img ?></td>
<td><?= $item->contact_no ?></td>
<td><?= $item->propertyLocation ?></td>
</tr>
<?php endforeach;?>
</table>

<div>
</table>

	</div><p>
<center><a href="dashboard/propertyOsignin" class="hollow button primary textbox">Extranet Login</a><br/></center>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  '<strong>Oxy</strong>' : '' ?></p>
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
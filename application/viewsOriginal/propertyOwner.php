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
        background-color:grey;
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
<h1><img src="<?php echo base_url('assets/img/fronthotels.jpg');?>"
	height=35 width= 100>
	FRONT HOTELS Property owner</h1>
    	<div id="body">	
	<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
               <ul class="nav navbar-nav">
              <li class="dropdown">
                  <a href="<?php echo base_url('dashboard/propertyOwner');?>" >Home</a>               
                </li>               
                <li class="dropdown">           
                </li>
                 <li class="dropdown">
                  <a href="<?php echo base_url('dashboard/RecievedReservation');?>">Reservations</a>
                 <!-- <ul class="dropdown-menu" role="menu">
                    <li><a href="reservation">Confirm Reservation</a></li>
					<li class="divider"></li>
                    <li><a href="#">Today</a></li>
					<li class="divider"></li>
                    <li><a href="#">Tomorrow</a></li>
                    <li class="divider"></li>
                     <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul> -->
                </li>
				<!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Property</a>
                  <ul class="dropdown-menu" role="menu">
                   <li><a href="registerProperty">Register a property</a></li> 
					<li class="divider"></li>
                    <li><a href="rates">Rates</a></li>
					<li class="divider"></li>
                    <li><a href="#">Availabity</a></li>
					<li class="divider"></li>
                    <li><a href="#">Room details</a></li>
                    <li class="divider"></li>
					<li class="divider"></li> -
                    <li><a href="#">Photos</a></li>
                    <!-- <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li> -
                  </ul>
                </li> -->
								<li class="dropdown">
                  <a href="<?php echo base_url('dashboard/mail');?>">Mail</a>
              
                </li>
				<!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Finance</a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="invoices">Invoice</a></li>
					<li class="divider"></li>
                    <li><a href="#">Reservations</a></li>
					<li class="divider"></li>
                    <li><a href="#">Pay details</a></li>
                    <li class="divider"></li>
                    <!-- <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li> 
                  </ul>
                </li> -->
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account</a>
                  <ul class="dropdown-menu" role="menu">
                  <!-- <li><a href="propertyOsignin">login</a></li> -->
					<li class="divider"></li>
                    <li><a href="accountsettings">Account settings</a></li>
					<li class="divider"></li>                    
					<li class="divider"></li>
                    <li><a href="<?php echo base_url('dashboard/POlogout');?>">Logout</a></li>
                    <li class="divider"></li>
                   </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                </div>
              </form>
            </div><!-- /.navbar-collapse -->	

<br/><hr/>
<div class="side-nav">
<?php $username = $this->session->userdata('username')?>
<?php $propertyownerid = $this->session->userdata('userid')?>
<h1 class="greeting">Welcome      <?php echo $username;?></h1>
</div>
<a href="registerProperty" class="button">Add Property</a>
<!-- <hr/> -->
<?php if(count($Precords)):?>
<?php foreach($Precords as $Precord):?>
<div>
<div>
<table><tr><th><?php echo $Precord->propertyName?></th><th></th><th></th></tr>
  <tr><td width="150" height="121"><img src="<?php echo $Precord->img;?>" width="150" height="121"></td> 
  <td><p>Rating<?php echo $Precord->hotel_grade?>*
  <br> Restaurant:<?php echo $Precord->restaurant?>
  <br> Wifi:<?php echo $Precord->wifi?>
  <br> Parking:<?php echo $Precord->parking?>
  <br> Breakfast:<?php echo $Precord->breakfast?>
  <br></p></td>
  <td><?php echo anchor("dashboard/post/{$Precord->Property_id}","Manage property",['class'=>'button']);?>|
  <?php echo anchor("dashboard/editpost/{$Precord->Property_id}","Edit",['class'=>'button']);?>|
  <?php echo anchor("dashboard/deletePost/{$Precord->Property_id}","Delete",['class'=>'button']);?></td></tr>
  <tr><td><p><?php echo $Precord->description?></p></td><td></td><td></td></tr>
</div>
<div>
</table>
<?php endforeach;?>
<?php else:?>
<p> No property found!!
<?php endif;?>
	</div><p>
<!-- <ul>

<li><?php echo anchor("dashboard/post/{$record->Property_id}","VIEW",['class'=>'menu-item']);?>
</li>
<!-- <li><?php echo anchor("dashboard/editPost/{$record->Property_id}","EDIT",['class'=>'menu-item']);?>
</li>
<li><?php echo anchor("dashboard/deletePost/{$record->Property_id}","DELETE",['class'=>'menu-item']);?>
</li> -->
</ul>
</div>
</div>
</div>
</div>
<!-- </hr> -->

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  '<strong>Oxy</strong>' : '' ?></p>
</div>
<script src="<?php echo base_url('plugins/jQuery/jQuery-2.1.4.min.js');?>"></script>
<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
<script src="<?php echo base_url('plugins/fastclick/fastclick.min.js');?>"></script>
<script src="<?php echo base_url('dist/js/app.min.js');?>"></script>
<script src="<?php echo base_url('dist/js/demo.js');?>"></script>
<!-- <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script> -->
    <!-- Bootstrap 3.3.5 -->
    <!-- <script src="../../bootstrap/js/bootstrap.min.js"></script> -->
    <!-- SlimScroll -->
    <!-- <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script> -->
    <!-- FastClick -->
    <!-- <script src="../../plugins/fastclick/fastclick.min.js"></script> -->
    <!-- AdminLTE App -->
    <!-- <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="../../dist/js/demo.js"></script> --> 

</body>
</html>
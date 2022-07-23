<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>WELCOME TO ADMIN</title>
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
	<h1>Welcome admin</h1>

	<div id="body">	
	<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li> -->
                <li class="dropdown">
                  <a href="<?php echo base_url('index.php/dashboard/admin');?>" >Home</a>
                  <!-- <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Confirm Reservation</a></li>
					<li class="divider"></li>
                    <li><a href="#">Today</a></li>
					<li class="divider"></li>
                    <li><a href="#">Tomorrow</a></li>
                    <li class="divider"> 
                    </li>
                    <!-- <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li> -
                  </ul>-->
                </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Property</a>
                  <ul class="dropdown-menu" role="menu">
                  <li><a href="<?php echo base_url('index.php/dashboard/managePublished');?>">Manage Published</a></li>
					<li class="divider"></li>
                    <li><a href="#">Rates</a></li>
					<li class="divider"></li>
                    <li><a href="#">Availabity</a></li>
					<li class="divider"></li>
                    <li><a href="#">Room details</a></li>
                    <li class="divider"></li>
					<!-- <li class="divider"></li> -->
                    <li><a href="#">Photos</a></li>
                    <!-- <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li> -->
                  </ul>
                </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mail</a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Recieved</a></li>
					<li class="divider"></li>
                    <li><a href="#">Sent</a></li>
					<li class="divider"></li>
                    <li><a href="#">Compose</a></li>
                    <li class="divider"></li>
                    <!-- <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li> -->
                  </ul>
                </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Finance</a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Invoice</a></li>
					<li class="divider"></li>
                    <li><a href="#">Reservations</a></li>
					<li class="divider"></li>
                    <li><a href="#">Pay details</a></li>
                    <li class="divider"></li>
                    <!-- <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li> -->
                  </ul>
                </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account</a>
                  <ul class="dropdown-menu" role="menu">
                  <!-- <li><a href="propertyOsignin">login</a></li>
					<li class="divider"></li>
                    <li><a href="#">Account settings</a></li>
					<li class="divider"></li> -->
                    <li><a href="#">change Password</a></li>
					<li class="divider"></li>
                    <li><a href="<?php echo base_url('index.php/dashboard/adminlogout');?>">Logout</a></li>
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
<!-- <fieldset><label><h3>Reservations</h3></label> -->
<div>
<div>
<!-- <table>
<tr><th>Hotel</th><th>Customer Name</th><th>Contact no</th><th>Email</th>
<th>Check in</th><th>Check out</th><th>Total Amount</th><th>Action</th></tr>
<?php if(count($Precords)):?>
<?php foreach($Precords as $Precord):?> 
  <tr><td><?php echo $Precord->propertyName?></td><td><?php echo $Precord->customer_name?></td> 
  <td><?php echo $Precord->customer_contact?></td><td><?php echo $Precord->customer_email?></td>
  <td><p><?php echo $Precord->checkin?></td><td><?php echo $Precord->checkout?></p></td>
  <td><?php echo $Precord->GrandTotal?></td> 
  <td><?php echo anchor("dashboard/viewReservation/{$Precord->book_id}","View",['class'=>'button']);?>|
  <?php echo anchor("dashboard/post/{$Precord->book_id}","Publish",['class'=>'button']);?>|
  <?php echo anchor("dashboard/deletePost/{$Precord->book_id}","Delete",['class'=>'button']);?></td></tr>
</div>
<div>
<?php endforeach;?>
<?php else:?>
<p> No reservations found in the system
<?php endif;?>
</table> -->
	<!-- </div> -->
    <p> 
    </fieldset>
<fieldset><label><h3>Manage published Properties</h3></label>
<hr/>
<div>
<div>
 <table> 
 <tr><th>Manage published Property</th><th>Details</th><th></th></tr>
 <?php if(count($records)):?>
<?php foreach($records as $record):?>
<tr><td><?php echo $record->propertyName;?></td><th></th><th></th></tr>
  <tr><td><img src=<?php echo $record->img;?> height=100 width= 100></td>
  <td><p><?php echo $record->hotel_grade?><br><?php echo $record->description?></p></td>
  <td><?php echo anchor("dashboard/adminViewPublished/{$record->Publish_id}","View",['class'=>'button']);?>|
  <?php echo anchor("dashboard/adminEditpublished/{$record->Publish_id}","Edit",['class'=>'button']);?>|
  <?php echo anchor("dashboard/unpublish/{$record->Publish_id}","Unpublish",['class'=>'button']);?>
  </td></tr>
</div>
<div>
<?php endforeach;?>
<?php else:?>
<p> No properties found in the system
<?php endif;?>
</table>
	</div><p> 
    </fieldset>
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
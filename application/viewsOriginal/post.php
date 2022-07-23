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
<!-- <p>bookersafrica in place</p> -->
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
               <ul class="nav navbar-nav">
              <li class="dropdown">
                  <a href="<?php echo base_url('index.php/dashboard/propertyOwner');?>" >Home</a>               
                </li>               
                <li class="dropdown">           
                </li>
                 <li class="dropdown">
                  <a href="<?php echo base_url('index.php//dashboard/RecievedReservation');?>">Reservations</a>
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
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mail</a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="mail">Recieved</a></li>
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
                    <li><a href="<?php echo base_url('index.php/dashboard/POlogout');?>">Logout</a></li>
                    <li class="divider"></li>
                   </ul>
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
<div class="small-12 medium-6 large-3 columns">
<table><tr><th><?php echo $posts->propertyName?></th><th></th><th></th></tr>
  <tr><td><img src=<?php echo $posts->img;?> height=120 width= 150></td>
  <!-- <td><p><?php echo $posts->description?></p></td> -->
  <td>
  <p>  Rating*<?php echo $posts->hotel_grade?>
  <br> Restaurant:<?php echo $posts->restaurant?>
  <br> Wifi:<?php echo $posts->wifi?>
  <br> Parking:<?php echo $posts->parking?>
  <br> Breakfast:<?php echo $posts->breakfast?>
  <br> Language:<?php echo $posts->languages?>
  <br> Airport Shuttle:<?php echo $posts->airport_shuttle?>
  <br> Daily maid Service:<?php echo $posts->daily_maid_service?>

  <br></p></td>
<td><?php echo anchor("dashboard/registerRoom/{$posts->Property_id}","Add a room",['class'=>'button']);?>
||<?php echo anchor("dashboard/addphotos/{$posts->Property_id}","Add photos",['class'=>'button']);?></td></tr>
<tr><td> <?php echo $posts->description?></td><td></td><td></td></tr>
</table>
<div class="cont_order">
<table>
<tr><th></th><th><B>Room type:</b></th><th><B>No of rooms:</b></th><th><B>Facility & Services:</b></th>
<th><B>Guest capacity:</b></th><th><B>Today's price</b></th><th></th>
</tr>
<?php if(count($rooms)):?>
<?php foreach($rooms as $room):?>
<td><img src="<?php echo $room->Rimg;?>" height=100 width= 300></td>
<td><?php echo $room->roomType;?></td>
<td><br/>	<?php echo $room->no_of_rooms; ?>
</td>
<td>
 Breakfast:
<!--	<?php echo $room->breakfast;?><br/>
	Smoking policy:
	<?php echo $room->Smoking_policy;?><br/>
	Wifi:
	<?php echo $room->wifi;?>
	Breakfast:
	<?php echo $room->breakfast;?><br/>
	Breakfast:
	<?php echo $room->breakfast;?><br/>
	Breakfast:
	<?php echo $room->breakfast;?><br/>
	Smoking policy:
	<?php echo $room->Smoking_policy;?><br/>
	Wifi:
	<?php echo $room->wifi;?> 
	Breakfast:
	<?php echo $room->breakfast;?><br/>
	Breakfast:
	<?php echo $room->breakfast;?><br/>-->	
</td>
<td><?php echo $room->no_of_guests;?></td>
<td>UgShs:  <?php echo $room->price_per_night;?></td>
<td><?php echo anchor("dashboard/roomphotos/{$room->room_id}","Add room photos",['class'=>'danger button']);?>|
<?php echo anchor("dashboard/editRoom/{$room->room_id}","Edit room",['class'=>'danger button']);?>|
<?php echo anchor("dashboard/deleteRoom/{$room->room_id}","Delete",['class'=>'danger button']);?><br/>
<!-- <div id="totalPrice"></div> -->
</td>
</tr><?php endforeach;?>
<?php else:?>
<p> There are no rooms for this property yet abeg!
<?php endif;?></table>


</div>


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
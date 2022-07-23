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
            </div><!-- /.navbar-collapse -->	<hr/>
<div class="small-12 medium-6 large-3 columns">
<div class="side-nav">
<?php $username = $this->session->userdata('username')?>
<h1 class="greeting">Welcome      <?php echo $username;?></h1>
</div>


<table><tr><th><?php echo $posts->propertyName;?></th><th></th><th></th><th></th><th></th><th></th></tr>
<tr><td><img src="<?php echo $posts->img;?>" width ='120' height='150'></td>
<td><b>Hotel Grade:</b><?php echo $posts->hotel_grade; ?><br/>
<b>	Country:</b><?php echo $posts->Country?><br/>
<b>			Night Club:</b><?php echo $posts->nightclub_dj?><br/>	
<b>		Wifi:	</b><?php echo $posts->wifi ?>	<br/>
<b>			Parking:</b><?php echo $posts->parking ?>	<br/>
<b>		Breakfast:</b>	<?php echo $posts->breakfast?><br/>	
<b>		Language:</b>	<?php echo $posts->languages?><br/>	
<b>			Restuarant:</b><?php echo $posts->restaurant?>	<br/>
<b>		Airport Shuttle:</b>	<?php echo $posts->airport_shuttle ?><br/>
<b>		Daily Maid:	</b><?php echo $posts->daily_maid_service?>	<br/>
<b>		Airport Shuttle:</b>	<?php echo $posts->airport_shuttlew?><br/></td><td>
<b>		Banquet:	</b><?php echo $posts->meeting_banquet_facilities?><br/>
<b>		a la carte:	</b><?php echo $posts->a_la_carte?><br/>
<b>		Luggage:</b>	<?php echo $posts->luggage_storage?><br/>
<b>		Smoking policy:</b>	<?php echo $posts->non_smoking_rooms?><br/>
<b>		Air condition:</b>	<?php echo $posts->air_conditioning ?><br/></td><td>
<b>		Massage	:</b><?php echo $posts->massage ?><br/>
<b>		Garden:	</b><?php echo $posts->garden ?><br/>
<b>		Buffet:	</b><?php echo $posts->buffet ?><br/>
<b>		Golf course	:</b><?php echo $posts->golf_course?><br/>
<b>		Family:	</b><?php echo $posts->family_rooms?><br/></td><td>
<b>			Disabled guest:</b><?php echo $posts->disabled_guests ?><br/>
<b>			Hiking:</b><?php echo $posts->hiking?><br/>
<b>			Spa:</b>	<?php echo $posts->spa_and_wellness ?><br/>
<b>			Outdoor:</b><?php echo $posts->outdoor_pool?><br/></td><td>
</b>				<!-- <?php echo $posts->non_smoking_throughout ?><br/>	 -->
<b>			Bar:</b>	<?php echo $posts->bar?><br/>	
<b>			Tv:	</b><?php echo $posts->tv?>	<br/>	
<b>			Bathroom:</b>	<?php echo $posts->bathroom ?>	<br/>	
<b>			Additional Services:</b>	<?php echo $posts->additional_service?>	<br/>	
<b>			Credit card:</b>	<?php echo $posts->credit_card?>	<br/>	
<b>			Money Transfer:</b>	<?php echo $posts->money_transfer?>	<br/>	
</td></tr></table>
<?php echo form_open_multipart('dashboard/adminregProperty');?>
<?php $data = array('Property_id'=>$posts->Property_id,
					'propertyOwnerid'=>$posts->propertyOwnerid,
					'propertyName'=>$posts->propertyName,
					'img'=>$posts->img,
					'Contact_person'=>$posts->Contact_person,
					'person_title'=>$posts->person_title,
					'contact_no'=>$posts->contact_no,
					'propertyLocation'=>$posts->propertyLocation,
					'price_per_night'=>$posts->price_per_night,
					'description'=>$posts->description,
					'propertyOName'=>$posts->propertyOName,
					'room_id'=>$posts->room_id,
					'telephone'=>$posts->telephone,
					'propertyOwnerid'=>$posts->propertyOwnerid,
					'Country'=>$posts->Country,
					'nightclub_dj'=>$posts->nightclub_dj,
					'wifi'=>$posts->wifi,
					'parking'=>$posts->parking,
					'breakfast'=>$posts->breakfast,
					'languages'=>$posts->languages,
					'restaurant'=>$posts->restaurant,
					'airport_shuttle'=>$posts->airport_shuttle,
					'daily_maid_service'=>$posts->daily_maid_service,
					'airport_shuttlew'=>$posts->airport_shuttlew,
					'meeting_banquet_facilities'=>$posts->meeting_banquet_facilities,
					'a_la_carte'=>$posts->a_la_carte,
					'luggage_storage'=>$posts->luggage_storage,
					'non_smoking_rooms'=>$posts->non_smoking_rooms,
					'air_conditioning'=>$posts->air_conditioning,
					'massage'=>$posts->massage,
					'garden'=>$posts->garden,
					'buffet'=>$posts->buffet,
					'golf_course'=>$posts->golf_course,
					'family_rooms'=>$posts->family_rooms,
					'disabled_guests'=>$posts->disabled_guests,
					'hiking'=>$posts->hiking,
					'spa_and_wellness'=>$posts->spa_and_wellness,
					'outdoor_pool'=>$posts->outdoor_pool,
					'non_smoking_throughout'=>$posts->non_smoking_throughout,
					'bar'=>$posts->bar,
					'tv'=>$posts->tv,
					'bathroom'=>$posts->bathroom,
					'additional_service'=>$posts->additional_service,
					'credit_card'=>$posts->credit_card,
					'money_transfer'=>$posts->money_transfer,);
					 ?>
<?php echo form_hidden($data)?>
<?php echo form_submit(['name'=>'submit','value'=>'Publish Property','class'=>'button']);?>
<?php echo form_close();?>

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
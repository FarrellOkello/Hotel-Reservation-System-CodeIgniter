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
<div class="navbar navbar-default">
<h1><img src="<?php echo base_url('assets/img/fronthotels.jpg');?>"
	height=35 width= 100>
	FRONT HOTELS</h1>	
	<!-- <div id="body"> -->

<div  class="collapse navbar-collapse pull-left" id="navbar-collapse" >
<!--   -->
              <ul class="nav navbar-nav"> 
			  <li class="dropdown">
                  <a href="<?php echo base_url('index.php/dashboard');?>" >Home</a>               
                </li>               
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
                  <a href="dashboard/dashboardlogout" >Logout</a>               
                </li>
              </ul>
			  </div>      
              </form>
			</div><!-- /.navbar-collapse -->	
			<!-- <hr/> -->
<div class="small-12 medium-6 large-3 columns">
<div class="side-nav">
<?php $username = $this->session->userdata('username')?>
<h1 class="greeting">Welcome      <?php echo $username;?></h1>
</div>
<!-- <div class="grid-x grid-padding-x"> -->
</div>
<!-- <?php echo form_close();?> -->
<div class="grid-x grid-padding-x">
      <div class="large-4 medium-4 cell">     
          <div class="callout">	
		  <div class="large-4 medium-4 cell">				
<?=form_open('dashboard/search');?>
<?=form_open('dashboard/search');?>
<?php $search = array('name'=>'search','id'=>'search','value'=>'Destination','type'=>'text','class'=>'form-control');?>
<?php $checkin = array('name'=>'checkin','value'=>'checkin','type'=>'date','class'=>'time','class'=>'form-control');?>
<?php $checkout = array('name'=>'checkout','value'=>'checkin','type'=>'date','class'=>'time','class'=>'form-control');?>
<?php $adults = array('name'=>'adults','value'=>'adults','type'=>'text','class'=>'textbox','class'=>'form-control');?>
<?php $children = array('name'=>'children','value'=>'childrens','type'=>'text','class'=>'textbox','class'=>'form-control');?>
<div class="form-group has-feedback">
<?=form_input($search);?>
<span class=""></span>
</div><div class="form-group has-feedback">
<?=form_input($checkin);?>
<span class=""></span>
</div><div class="form-group has-feedback">
<?=form_input($checkout);?>
<span class=""></span>
</div><div class="form-group has-feedback">
<?=form_input($adults);?>
<span class=""></span>
</div><div class="form-group has-feedback">
<?=form_input($children);?>
<span class=""></span>
<input type=submit value='Search' class= 'btn btn-primary btn-block btn-flat' /></p>
</div>
</div></div></div>
        <div class="large-8 medium-8 cell">
       <div class="large-8 medium-8 cell">
		<?php if($msg = $this->session->flashdata('response')):?>
            <div class="response">
              <h3><?php echo $msg; ?></h3>
            </div>
            <?php endif; ?>
<?php if(count($records)):?>
<?php foreach($records as $record):?>
<div>
<div>
<table>
<tr><th><?php echo $record->propertyName?></th><th></th><th></th></tr>
<tr><td><img src=<?php echo $record->img;?> height=50 width= 150></td>
<!-- <th> -->
<!-- Wifi <?php echo $record->wifi?><br/> <td> -->
<td><p align="left"><?php echo $record->description?></p></td> 
 <td width='50'><?php echo anchor("dashboard/bookhotel/{$record->Property_id}","Book now",
 ["class"=>"btn btn-primary btn-block btn-flat"]);?></td></tr>
</div>
<div>
</table>
<?php endforeach;?>
<?php else:?>
<p> No property found in the database!</p>
<?php endif;?>
	</div>
	</div>
	</div>
	<!-- </div> -->
<center><a href="dashboard/propertyOsignin" class="hollow button primary textbox">Extranet Login</a><br/></center>
</div>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  '<strong>Oxy</strong>' : '' ?></p>
</div>
<!-- <table>
<tr><th>Name </th><th>grade</th><th>image</th><th>Contact</th><th>Location</th></tr>
<?php foreach($query as $item):?>
<tr>
<!-- <td><img src=<?php echo $item->ckeckout;?> height=100 width= 100></td> -->
<!-- <td><?= $item->propertyName ?></td> -->
<!-- <td><?= $item->checkin ?></td> -->
<!-- <td><?= $item->checkout ?></td> -->
<!-- <td><?= $item->checkout ?></td> -->
<!-- <td><?= $item->propertyLocation ?></td> -->
</tr>
<?php endforeach;?>
</table>

<!-- <?php if(count($items)):?>
<?php foreach($items as $item):?>
<div>
<div>
<table>
<tr><th><?php echo $item->propertyName?></th><th></th><th></th></tr>
<tr><td><img src=<?php echo $item->img;?> height=50 width= 150></td>
<!-- <th> -->
<!-- Wifi <?php echo $item->wifi?><br/> <td> -->
<td><p align="left"><?php echo $item->description?></p></td> 
 <td width='50'><?php echo anchor("dashboard/bookhotel/{$item->Property_id}","Book now",
 ["class"=>"btn btn-primary btn-block btn-flat"]);?></td></tr>
</div>
<div>
</table>
<?php endforeach;?>
<?php else:?>
<p> No property found in the database!
<?php endif;?>-->
	</div><p> 
</div>
</div>
<?=form_close();?>
	<!-- <div class="container">
      <h2>Basic Inline Calendar</h2>
	<div class="row">
        <div class="col-xss-4">
          <div id="dynamic-data" data-toggle="calendar"></div>
        </div>
       </div> -->
<!-- <center><a href="dashboard/propertyOsignin" class="hollow button primary textbox">Extranet Login</a><br/></center>
</div>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  '<strong>Oxy</strong>' : '' ?></p>
</div> -->
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

	<script type="text/javascript" src="<?php echo base_url('scripts/components/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('scripts/dateTimePicker.min.js');?>"></script>
	<script type="text/javascript">
    $(document).ready(function()
    {
      $('#basic').calendar();
      $('#glob-data').calendar(
      {
        unavailable: ['*-*-8', '*-*-10']
      });
      $('#custom-first-day').calendar(
      {
        day_first: 2,
        unavailable: ['2014-07-10'],
        onSelectDate: function(date, month, year)
        {
          alert([year, month, date].join('-') + ' is: ' + this.isAvailable(date, month, year));
        }
      });
      $('#custom-name').calendar(
      {
        day_name: ['Mo', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
        month_name: ['January', 'Febraury', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        unavailable: ['2014-07-10']
      });
      $('#dynamic-data').calendar(
      {
		
        adapter: 'http://localhost/bookersafrica/server/adapter.php'
      });
      $('#show-next-month').calendar(
      {
        num_next_month: 1,
        num_prev_month: 1,
        unavailable: ['*-*-9', '*-*-10']
      });
    });
    </script>
</body>
</html>
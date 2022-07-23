<?php defined('BASEPATH') OR exit('No direct script access allowed');?><!DOCTYPE html>
<html lang="en">
<head>

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
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->  
<!--[if lt IE 9]>     
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>     
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<meta charset="utf-8">
<title>Welcome to bookersafrica</title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/foundation.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css');?>">
<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('dist/css/skins/_all-skins.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/style3.css');?>" type="text/css">	
</head>

<body>

 <div class="templatemo-top-menu"> 
<!--<div class="navbar navbar-default">-->
<div class="navbar navbar-default" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
</button>

<h1><img src="<?php echo base_url('assets/img/fronthotels.jpg');?>"height=35 width= 100>
               Front Hotels
</h1>	
  </div>
                      <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                          <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                              <li class="active">
                             <a href="<?php echo base_url('dashboard');?>" >Home</a>           
                             </li>             
			<li class="">
			<a href="<?php echo base_url('dashboard/registerproperty');?>" >Register property</a>              
				</li>                              
				<li class="dropdown">
				<a href="<?php echo base_url('dashboard/signup');?>" >Sign up</a>
                                  </li>
				<li class="dropdown">
				<a href="<?php echo base_url('dashboard/signin');?>" >Sign in</a>               
                                 </li>
				<li class="dropdown">
				<a href="<?php echo base_url('dashboard/contact');?>" >Contact us</a>               
                                 </li>
				<li class="dropdown">
				<a href="<?php echo base_url('dashboard/logout');?>" >Logout</a>               
                                </li>
</ul>
                      </div><!--/.nav-collapse -->
                  </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div><!-- /container-->
        
<div id="body"> 
<div class="navbar-collapse collapse" id="templatemo-nav-bar">
</div></form>
			</div><!-- /.navbar-collapse -->	
		
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
<label>Destination:
<input type="text" name="search" value="" id="search" class="form-control"  />
<span class=""></span></label>
</div><div class="form-group has-feedback">
<label>Check in:
<input type="date" name="checkin" value="" class="form-control"  />
<span class=""></span></label>
</div><div class="form-group has-feedback">
<label>Check out:
<input type="date" name="checkout" value="" class="form-control"  />
<span class=""></span></label>
</div><div class="form-group has-feedback">
<label>Adults:
<input type="text" name="adults" value="" class="form-control"  />
<span class=""></span></label>
</div><div class="form-group has-feedback">
</label><label>Children:
<input type="text" name="children" value="" class="form-control"  />
<span class=""></span></label>
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


<!--//the end of these things///-->










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
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html lang="en">
<head>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">  
  <!-- Bootstrap 3.3.5 -->
 <link rel="stylesheet" href="https://fronttours.com/fronthotels/bootstrap/css/bootstrap.min.css">    
 <!-- Font Awesome -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">   
 <!-- Ionicons -->    
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">    
<!-- Theme style -->
<link rel="stylesheet" href="https://fronttours.com/fronthotels/dist/css/AdminLTE.min.css">
<!-- iCheck -->  
  <link rel="stylesheet" href="https://fronttours.com/fronthotels/plugins/iCheck/square/blue.css">  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->  
<!--[if lt IE 9]>     
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>     
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<meta charset="utf-8">
<title>Welcome to fronthotels</title>
<link rel="stylesheet" href="https://fronttours.com/fronthotels/assets/css/foundation.css">
 <link rel="stylesheet" href="https://fronttours.com/fronthotels/assets/css/app.css">
<link rel="stylesheet" href="https://fronttours.com/fronthotels/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fronttours.com/fronthotels/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="https://fronttours.com/fronthotels/dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="https://fronttours.com/fronthotels/assets/css/style3.css" type="text/css">	
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
<img src="https://fronttours.com/fronthotels/assets/img/fronthotels.jpg"height=35 width= 100>
Front Hotels 
  </div>
                      <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                          <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                              <li class="active">
                             <a href="https://fronttours.com/fronthotels/dashboard" >Home</a>           
                             </li>             
			<li class="">
			<a href="https://fronttours.com/fronthotels/dashboard/registerproperty" >Register property</a>              
				</li>                              
				<li class="dropdown">
				<a href="https://fronttours.com/fronthotels/dashboard/signup" >Sign up</a>
                                  </li>
				<li class="dropdown">
				<a href="https://fronttours.com/fronthotels/dashboard/signin" >Sign in</a>               
                                 </li>
				<li class="dropdown">
				<a href="https://fronttours.com/fronthotels/dashboard/contact" >Contact us</a>               
                                 </li>
				<li class="dropdown">
				<a href="https://fronttours.com/fronthotels/dashboard/logout" >Logout</a>               
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
<h1 class="greeting">Welcome      <?php echo $username;?> </h1>
</div>
<!-- <div class="grid-x grid-padding-x"> -->


</div>
<?php echo form_close();?>
<div class="grid-x grid-padding-x">
<div class="large-4 medium-4 cell">     
          <div class="callout">			  
<?=form_open('dashboard/search');?>
<?php $search = array('name'=>'search','id'=>'search','value'=>'','type'=>'text','class'=>'form-control');?>
<?php $checkin = array('name'=>'checkin','value'=>'','type'=>'date','class'=>'time','class'=>'form-control');?>
<?php $checkout = array('name'=>'checkout','value'=>'','type'=>'date','class'=>'time','class'=>'form-control');?>
<?php $adults = array('name'=>'adults','value'=>'','type'=>'text','class'=>'textbox','class'=>'form-control');?>
<?php $children = array('name'=>'children','value'=>'','type'=>'text','class'=>'textbox','class'=>'form-control');?>
<div class="form-group has-feedback">
<label>Destination:
<?=form_input($search);?>
<span class=""></span></label>
</div><div class="form-group has-feedback">
<label>Check in:
<?=form_input($checkin);?>
<span class=""></span></label>
</div><div class="form-group has-feedback">
<label>Check out:
<?=form_input($checkout);?>
<span class=""></span></label>
</div><div class="form-group has-feedback">
<label>Adults:
<?=form_input($adults);?>
<span class=""></span></label>
</div><div class="form-group has-feedback">
</label><label>Children:
<?=form_input($children);?>
<span class=""></span></label>
<input type=submit value='Search' class= 'btn btn-primary btn-block btn-flat' /></p>
</div>
</div></div>
        <!-- </div>		 -->
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
<tr><td><img src=<?php echo $record->img;?> height=121 width= 150></td>
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
<centre><a href="dashboard/propertyOsignin" class="hollow button primary textbox">Extranet Login</a><br/></centre>
<p class="footer"></p>

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
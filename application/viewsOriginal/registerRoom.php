<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>List a room</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/foundation.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css');?>">
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
	<h1>List a room </h1>
	<div id="body">
<?php echo form_open_multipart('dashboard/regRoom');?>

<?php if($msg = $this->session->flashdata('response')):?>
            <div class="response"><?php echo $msg; ?> </div>
            <?php endif; ?>
<?php $userid = $this->session->userdata('userid')?>
<?php $hotel_id;?> 
<?php $propertyName =$hotel->propertyName;?>
 <?php $hotel->propertyName;?> 
 <?php  $email=$hotel->email;?> 
<!-- // -->
<?php $data = array('hotel_id'=>$hotel_id,'propertyOwnerid'=>$userid,
'propertyOEmail'=>$email,
'propertyName'=>$propertyName  );  ?>
<?php echo form_hidden($data)?>
<div class="grid-x grid-padding-x">
<div class="large-4 medium-4 cell">
<label>Room Type:
<select name="roomType" value="">
            <option value="">Please Select</option>
            <option value="Single">Single</option>
			<option value ="Double">Double</option>
			<option value ="Twin">Twin</option>
			<option value ="Twin/Double">Twin/Double</option>
			<option value ="Quadruple">Quadruple</option>
			<option value ="Family">Family</option>
			<option value ="Suite">Suite</option>
			<option value ="Studio">Studio</option>
			<option value ="Apartment">Apartment</option>
			<option value ="Dormitory room">Dormitory room</option>
			<option value ="Bed in Dormitory">Bed in Dormitory</option>
		          </select>
		  <!-- </div> -->
		  </div>
<div class="large-4 medium-4 cell">
		 </label>
<label>Number of rooms (of this type)    
<!-- <div class="large-1 medium-1 cell"> -->
<select name="no_of_rooms" value="">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
          </select>
          <!-- </div> -->
</label>
</div>
<div class="large-4 medium-4 cell">
<label>Smoking policy:
<!-- <div class="large-1 medium-1 cell"> -->
<select name="Smoking_policy" value="">
            <option value="Non-smoking">Non-smoking</option>
            <option value="Smoking">Smoking</option>
            <!-- <option value ="">Double</option> -->
          </select>
          </div></div>
</label>
<div class="grid-x grid-padding-x">
<div class="large-4 medium-4 cell">
<label>What kinds of beds are available in this room?*
<select name="bed_options" value="">
            <!-- <option value="">Please Select</option> -->
            <option value="Single bed">Single bed / 90-130 cm wide</option>
			<option value ="Double bed">Double bed   /  131-150 cm wide</option>
			<option value ="Double bed">Large bed (King size) /  151-180 cm wide</option>
			<option value ="Double bed">Extra-large double bed (Super-king size) / 181-210 cm wide</option>
			<option value="Single bed">Bunk bed /  Variable Size</option>
			<option value="Single bed">Sofa bed / Variable Size</option>
			<option value="Single bed">Futon Mat /  Variable Size</option>
		  </select>
		  </div>
		  <div class="large-4 medium-4 cell">
         
</label>
<label>Number of beds:
<select name="no_of_beds" value="">
            <option value="Non-smoking">Select the number of beds</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
            <!-- <option value ="">Double</option> -->
          </select></label>
		  </div>
		  <div class="large-4 medium-4 cell">
<label>How many guests can stay in this room?
<?php echo form_input(['name'=>'no_of_guests','placeholder'=>'Number of guests','class'=>'textbox']);?>
<!-- <?php echo form_error('hotel_grade','<div class="text-danger">,</div>');?> -->
</label>

<label>Price per night in Ugx:
<?php echo form_input(['name'=>'price_per_night','placeholder'=>'Price per night','class'=>'textbox']);?>
<!-- <?php echo form_error('hotel_grade','<div class="text-danger">,</div>');?> -->
</label>
<label>Room photo:
 <?php echo form_upload(['name'=>'userfile','placeholder'=>'Upload Image','class'=>'primary button','multiple'=>'multiple']);?>
<!-- <?php echo form_error('user','<div class="text-danger">,</div>');?> 
</label><br/><br/><br/> -->
<label>
<?php echo form_submit(['name'=>'submit','value'=>'Register your Room','class'=>'hollow button success']);?>
<!-- <?php echo form_error('post_blog','<div class="text-danger">,</div>');?> -->
</label><br/><br/><br/>
<?php echo form_close();?>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  '<strong>Oxy</strong>' : '' ?></p>
</div>

</body>
</html>
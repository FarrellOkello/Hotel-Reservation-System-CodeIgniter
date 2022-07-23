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
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<div id="container">
	<h1>Property facility</h1>
	<div id="body">
<?php echo form_open_multipart('dashboard/regRoom');?>

<!-- <?php if($msg = $this->session->flashdata('response')):?>
            <div class="response"><?php echo $msg; ?> </div>
            <?php endif; ?>
<?php $userid = $this->session->userdata('userid')?>
 <?php $hotel_id;?> 
<?php $data = array('hotel_id'=>$hotel_id);  ?>
<?php echo form_hidden($data)?> -->
<div class="large-1 medium-1 cell">
<label>Internet/Wifi available to guests?
<div class="large-1 medium-1 cell">
<select name="wifi" value="">            
			<option value ="No">No</option>
			<option value ="Yes, free">Yes, free</option>
			<option value ="Yes, Paid">Yes, Paid</option>
          </select>
          </div>
		 </label><br/><br/><br/>
<label>Parking available to guests?*    
<div class="large-1 medium-1 cell">
<select name="parking" value="">            
			<option value ="No">No</option>
			<option value ="Yes, free">Yes, free</option>
			<option value ="Yes, Paid">Yes, Paid</option>
          </select>
          </div>
</label><br/><br/><br/>
<label>Is breakfast available to guests?
<div class="large-1 medium-1 cell">
<select name="breakfast" value="">            
			<option value ="No">No</option>
			<option value ="Yes, it's included in the price">Yes, it's included in the price</option>
			<option value ="Yes, it's optional">Yes, it's optional</option>
          </select>
          </div>
</label><br/><br/><br/>
<label>Languages spoke *
<div class="large-1 medium-1 cell">
<select name="languages" value="">
            <option value="English">English</option>
            <option value="Afrikaans">Afrikaans</option>
			<option value ="Arabic">Arabic</option>
			<option value ="Azerbaijani">Azerbaijani</option>
			<option value ="Belarusian">Belarusian</option>
			<option value="Bosnian">Bosnian</option>
			<option value="Bulgarian">Bulgarian</option>
			<option value="Catalan">Catalan</option>
          </select>
		  <select name="languages" value="">
            <option value="English">English</option>
            <option value="Afrikaans">Afrikaans</option>
			<option value ="Arabic">Arabic</option>
			<option value ="Azerbaijani">Azerbaijani</option>
			<option value ="Belarusian">Belarusian</option>
			<option value="Bosnian">Bosnian</option>
			<option value="Bulgarian">Bulgarian</option>
			<option value="Catalan">Catalan</option>
          </select>
		  <select name="languages" value="">
            <option value="English">English</option>
            <option value="Afrikaans">Afrikaans</option>
			<option value ="Arabic">Arabic</option>
			<option value ="Azerbaijani">Azerbaijani</option>
			<option value ="Belarusian">Belarusian</option>
			<option value="Bosnian">Bosnian</option>
			<option value="Bulgarian">Bulgarian</option>
			<option value="Catalan">Catalan</option>
          </select>
          </div>
</label><br/><br/><br/> <!--
Number of beds:
<select name="smoking_policy" value="">
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
            <option value ="">Double</option> 
          </select>-->
		  <label> Tick what is available only<br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Restuarant <br/>
		  <?php echo form_checkbox(['name'=>'24-hour front desk','class'=>'checkbox']);?>24-hour front desk <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Bar <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Airport shuttle <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Daily maid service 
		  <select name="daily_maid" value="">            
			<option value ="No">No</option>
			<option value ="Yes, free">Yes, free</option>
			<option value ="Yes, Paid">Yes, Paid</option>
          </select><br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Airport shuttle (additional charge) <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Meeting/banquet facilities    <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Restaurant (à la carte) <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Luggage storage    <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Non-smoking rooms <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?> Air conditioning   <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Massage <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Garden <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Restaurant (buffet) <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Golf course (within 3 km) <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Family rooms <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Facilities for disabled guests<br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?> Hiking      <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Spa and wellness centre    <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Outdoor pool <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Non-smoking throughout <br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Nightclub/DJ   <br/>
		  <label><b>Telephone</b><br/>		  
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>All rooms<br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Some rooms <br/>
		  </label>
		  <label><b>TV</b><br/>		  
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>All rooms<br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Some rooms <br/>
		  </label>
		  <label><b>Bathroom</b><br/>		  
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>All rooms<br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Some rooms <br/>
		  </label>
		  <label><b>Hairdryer</b><br/>		  
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>All rooms<br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Some rooms <br/>
		  </label>
		  <label><b>Mosquito net</b><br/>		  
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>All rooms<br/>
		  <?php echo form_checkbox(['name'=>'restuarant','class'=>'checkbox']);?>Some rooms <br/>
		  </label>

		  </label><br/><br/><br/>
<label><h2><b>Payments</h2></b>
<p>This is the last section of listing your property! Specify the types of payment you accept, tax details and other options like cancellation policies.
</p>
Guest payment options
Can you charge credit cards at the property?
<?php echo form_radio(['name'=>'restuarant','class'=>'checkbox']);?>Yes <br/>
If yes, choose; American express, visa card, money transfer
<?php echo form_radio(['name'=>'restuarant','class'=>'checkbox']);?>No<br/>
<label>
<?php echo form_submit(['name'=>'submit','value'=>'Complete your registration','class'=>'hollow button success']);?>
<!-- <?php echo form_error('post_blog','<div class="text-danger">,</div>');?> -->
</label><br/><br/><br/>
<?php echo form_close();?>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  '<strong>Oxy</strong>' : '' ?></p>
</div>

</body>
</html>
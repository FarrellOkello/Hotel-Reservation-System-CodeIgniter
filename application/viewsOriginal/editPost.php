<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Property</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/foundation.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css');?>">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-image:url("<?php echo base_url('/uploads/wallpaper.jpg');?>");
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
		background-color: grey;
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<div id="container">
	<h1>Edit Property </h1>
	<div id="body">
	<?php echo form_open_multipart('dashboard/update');?>
<?php if($msg = $this->session->flashdata('response')):?>
            <div class="response">
              <?php echo $msg; ?>
            </div>
            <?php endif; ?>
			<?php $data = array('Property_id'=>$posts->Property_id);  ?> 
            <?php echo form_hidden($data)?> 

<?php if($msg = $this->session->flashdata('response')):?>
            <div class="response"><?php echo $msg; ?> </div>
            <?php endif; ?>
			<?php $userid = $this->session->userdata('userid')?>
			<?php $data = array('propertyOwnerid'=>$userid);  ?>
            <?php echo form_hidden($data)?>
			<div class="grid-x grid-padding-x">
              <div class="large-4 medium-4 cell">
<label>Property Name:
<?php echo form_input(['name'=>'propertyName','placeholder'=>'Property name','value'=>$posts->propertyName,'class'=>'textbox',
'required'=>'required']);?>
<?php echo form_error('propertyName','<div class="text-danger">,</div>');?>
</div>
<div class="large-4 medium-4 cell">
</label>
<label>Hotel Grade:
<select name="hotel_grade" value="">            
			<option value ="1">1</option>
			<option value ="2">2</option>
			<option value ="3">3</option>
			<option value ="4">4</option>
			<option value ="5">5 </option>
          </select>
</label>
</div><div class="large-4 medium-4 cell">
<label>Contact Name/Person:
<?php echo form_input(['name'=>'Contact_person','placeholder'=>'Contact Name'
,'value'=>$posts->Contact_person,'class'=>'textbox',
'required'=>'required']);?>
<?php echo form_error('Contact_person','<div class="text-danger">,</div>');?>
</div></div>
<div class="grid-x grid-padding-x">
              <div class="large-4 medium-4 cell">
</label>
<label>Title/position of the contact person above:
<?php echo form_input(['name'=>'person_title','placeholder'=>'Title','class'=>'textbox',
'value'=>$posts->person_title,'required'=>'required']);?>
<?php echo form_error('hotel_grade','<div class="text-danger">,</div>');?>
</div><div class="large-4 medium-4 cell">
</label>
<label>Contact number:
<?php echo form_input(['name'=>'Contact_no','placeholder'=>'Contact number','class'=>'textbox',
'value'=>$posts->contact_no,'required'=>'required']);?>
<?php echo form_error('hotel_grade','<div class="text-danger">,</div>');?>
</label>
</div><div class="large-4 medium-4 cell">
<label>Where is your property located?
<select type="text" name="propertyLocation" class="form-control " id="african-countries">
<option selected>Choose your country</option>
<option value="algeria">Algeria</option>
<option value="angola">Angola</option>
<option value="benin">Benin</option>
<option value="botswana">Botswana</option>
<option value="burkina Faso">Burkina Faso</option>
<option value="burundi">Burundi</option>
<option value="cameroon">Cameroon</option>
<option value="cape-verde">Cape Verde</option>
<option value="central-african-republic">Central African Republic</option>
<option value="chad">Chad</option>
<option value="comoros">Comoros</option>
<option value="congo-brazzaville">Congo - Brazzaville</option>
<option value="congo-kinshasa">Congo - Kinshasa</option>
<option value="ivory-coast">Côte d’Ivoire</option>
<option value="djibouti">Djibouti</option>
<option value="egypt">Egypt</option>
<option value="equatorial-guinea">Equatorial Guinea</option>
<option value="eritrea">Eritrea</option>
<option value="ethiopia">Ethiopia</option>
<option value="gabon">Gabon</option>
<option value="gambia">Gambia</option>
<option value="ghana">Ghana</option>
<option value="guinea">Guinea</option>
<option value="guinea-bissau">Guinea-Bissau</option>
<option value="kenya">Kenya</option>
<option value="lesotho">Lesotho</option>
<option value="liberia">Liberia</option>
<option value="libya">Libya</option>
<option value="madagascar">Madagascar</option>
<option value="malawi">Malawi</option>
<option value="mali">Mali</option>
<option value="mauritania">Mauritania</option>
<option value="mauritius">Mauritius</option>
<option value="mayotte">Mayotte</option>
<option value="morocco">Morocco</option>
<option value="mozambique">Mozambique</option>
<option value="namibia">Namibia</option>
<option value="niger">Niger</option>
<option value="nigeria">Nigeria</option>
<option value="rwanda">Rwanda</option>
<option value="reunion">Réunion</option>
<option value="saint-helena">Saint Helena</option>
<option value="senegal">Senegal</option>
<option value="seychelles">Seychelles</option>
<option value="sierra-leone">Sierra Leone</option>
<option value="somalia">Somalia</option>
<option value="south-africa">South Africa</option>
<option value="sudan">Sudan</option>
<option value="south-sudan">Sudan</option>
<option value="swaziland">Swaziland</option>
<option value="Sao-tome-príncipe">São Tomé and Príncipe</option>
<option value="tanzania">Tanzania</option>
<option value="togo">Togo</option>
<option value="tunisia">Tunisia</option>
<option value="uganda">Uganda</option>
<option value="western-sahara">Western Sahara</option>
<option value="zambia">Zambia</option>
<option value="zimbabwe">Zimbabwe</option>
</select>
</label>
</div></div>
<div class="grid-x grid-padding-x">
<div class="large-4 medium-4 cell">
<label>Town/City:
<?php echo form_input(['name'=>'address','placeholder'=>'Contact number','value'=>$posts->address,'class'=>'textbox',
'required'=>'required']);?>
<?php echo form_error('address','<div class="text-danger">,</div>');?>
</label></div></div>
<div class="grid-x grid-padding-x">
              <div class="large-12 cell">
<label>Description:
<?php echo form_textarea(['name'=>'description','placeholder'=>'Write something about the property','class'=>'textbox',
"value"=> $posts->description,'required'=>'required']);?>
<?php echo form_error('hotel_grade','<div class="text-danger">,</div>');?>
</label></div></div>
<div class="grid-x grid-padding-x"> 
<div class="large-4 medium-4 cell">
<label>
<?php echo form_upload(['name'=>'userfile','placeholder'=>'Save','class'=>'primary button',
]);?>
<?php echo form_error('user','<div class="text-danger">,</div>');?>
</label></div></div>
<label>
</label>
<div class="grid-x grid-padding-x"> 
<div class="large-4 medium-4 cell">
<label>Internet/Wifi available to guests?
<select name="wifi" value="<?php echo $posts->wifi;?>">            
			<option value ="No">No</option>
			<option value ="Yes, free">Yes, free</option>
			<option value ="Yes, Paid">Yes, Paid</option>
          </select>
          </label>
		 </div><div class="large-4 medium-4 cell">
<label>Parking available to guests?*    
<select name="parking" value="<?php echo $posts->parking;?>">          
			<option value ="No">No</option>
			<option value ="Yes, free">Yes, free</option>
			<option value ="Yes, Paid">Yes, Paid</option>
          </select>
</label>
</div><div class="large-4 medium-4 cell">
<label>Is breakfast available to guests?
<select name="breakfast" value="<?php echo $posts->breakfast;?>">            
			<option value ="No">No</option>
			<option value ="Yes, it's included in the price">Yes, it's included in the price</option>
			<option value ="Yes, it's optional">Yes, it's optional</option>
          </select>
          </div></div>
</label>
<div class="grid-x grid-padding-x"> 
<div class="large-4 medium-4 cell">
<label>Language spoken*
<select name="languages" value="<?php echo $posts->language;?>">
            <option value="English">English</option>
            <option value="Afrikaans">Afrikaans</option>
			<option value ="Arabic">Arabic</option>
			<option value ="Azerbaijani">Azerbaijani</option>
			<option value ="Belarusian">Belarusian</option>
			<option value="Bosnian">Bosnian</option>
			<option value="Bulgarian">Bulgarian</option>
			<option value="Catalan">Catalan</option>
          </select>
		  </div><div class="large-4 medium-4 cell">
		  <label>Language spoken*
		  <select name="languages" value="<?php echo $posts->language;?>">
            <option value="English">English</option>
            <option value="Afrikaans">Afrikaans</option>
			<option value ="Arabic">Arabic</option>
			<option value ="Azerbaijani">Azerbaijani</option>
			<option value ="Belarusian">Belarusian</option>
			<option value="Bosnian">Bosnian</option>
			<option value="Bulgarian">Bulgarian</option>
			<option value="Catalan">Catalan</option>
          </select></label>
		  </div><div class="large-4 medium-4 cell">
		  <label>Language spoken*
		  <select name="languages" value="<?php echo $posts->language;?>">
            <option value="English">English</option>
            <option value="Afrikaans">Afrikaans</option>
			<option value ="Arabic">Arabic</option>
			<option value ="Azerbaijani">Azerbaijani</option>
			<option value ="Belarusian">Belarusian</option>
			<option value="Bosnian">Bosnian</option>
			<option value="Bulgarian">Bulgarian</option>
			<option value="Catalan">Catalan</option>
          </select></label>
          </div></div>
</label><div class="grid-x grid-padding-x">
              <div class="large-12 cell">
		  <label> Tick what is available only<br/>
		  <?php echo form_checkbox(['value'=>$posts->restaurant,'name'=>'restaurant','class'=>'checkbox']);?>Restuarant &nbsp
		  <?php echo form_checkbox(['value'=>$posts->frontdesk,'name'=>'frontdesk','class'=>'checkbox']);?>24-hour front desk &nbsp
		  <?php echo form_checkbox(['value'=>$posts->bar,'name'=>'bar','class'=>'checkbox']);?>Bar &nbsp
		  <?php echo form_checkbox(['value'=>$posts->airport_shuttle,'name'=>'airport_shuttle','class'=>'checkbox']);?>Airport shuttle &nbsp
		  <?php echo form_checkbox(['value'=>$posts->daily_maid_service,'name'=>'daily_maid_service','class'=>'checkbox']);?>Daily maid service 
		  </div></div>
		  </label>
		  <div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
		  <select name="daily_maid_service" value="<php echo $posts->daily_maid_service;?>">            
			<option value ="No">No</option>
			<option value ="Yes, free">Yes, free</option>
			<option value ="Yes, Paid">Yes, Paid</option>
          </select>
		  </div></div><label>
		  <div class="grid-x grid-padding-x">
              <div class="large-12 cell">
		  <?php echo form_checkbox(['value'=>$posts->additional_service,'name'=>'additional_service','class'=>'checkbox']);?>Airport shuttle (additional charge)&nbsp
		  <?php echo form_checkbox(['value'=>$posts->meeting_banquet_facilities,'name'=>'meeting_banquet_facilities','class'=>'checkbox']);?>Meeting/banquet facilities    &nbsp
		  <?php echo form_checkbox(['value'=>$posts->a_la_carte,'name'=>'a_la_carte','class'=>'checkbox']);?>Restaurant (à la carte) &nbsp
		  <?php echo form_checkbox(['value'=>$posts->luggage_storage,'name'=>'luggage_storage','class'=>'checkbox']);?>Luggage storage    &nbsp
		  <?php echo form_checkbox(['value'=>$posts->non_smoking_rooms,'name'=>'non_smoking_rooms','class'=>'checkbox']);?>Non-smoking rooms &nbsp
		  <?php echo form_checkbox(['value'=>$posts->air_conditioning,'name'=>'air_conditioning','class'=>'checkbox']);?> Air conditioning   <br/>
		  <?php echo form_checkbox(['value'=>$posts->massage,'name'=>'massage','class'=>'checkbox']);?>Massage &nbsp
		  <?php echo form_checkbox(['value'=>$posts->massage,'name'=>'massage','class'=>'checkbox']);?>Massage &nbsp
		  <?php echo form_checkbox(['value'=>$posts->garden,'name'=>'garden','class'=>'checkbox']);?>Garden &nbsp
		  <?php echo form_checkbox(['value'=>$posts->buffet,'name'=>'buffet','class'=>'checkbox']);?>Restaurant (buffet) &nbsp
		  <?php echo form_checkbox(['value'=>$posts->golf_course,'name'=>'golf_course','class'=>'checkbox']);?>Golf course (within 3 km) &nbsp
		  <?php echo form_checkbox(['value'=>$posts->family_rooms,'name'=>'family_rooms','class'=>'checkbox']);?>Family rooms <br/>
		  <?php echo form_checkbox(['value'=>$posts->disabled_guests,'name'=>'disabled_guests','class'=>'checkbox']);?>Facilities for disabled guests&nbsp
		  <?php echo form_checkbox(['value'=>$posts->hiking,'name'=>'hiking','class'=>'checkbox']);?> Hiking      &nbsp
		  <?php echo form_checkbox(['value'=>$posts->spa_and_wellness,'name'=>'spa_and_wellness','class'=>'checkbox']);?>Spa and wellness centre    &nbsp
		  <?php echo form_checkbox(['value'=>$posts->outdoor_pool,'name'=>'outdoor_pool','class'=>'checkbox']);?>Outdoor pool &nbsp
		  <?php echo form_checkbox(['value'=>$posts->non_smoking_throughout,'name'=>'non_smoking_throughout','class'=>'checkbox']);?>Non-smoking throughout <br/>
		  <?php echo form_checkbox(['value'=>$posts->nightclub_dj,'name'=>'nightclub_dj','class'=>'checkbox']);?>Nightclub/DJ   &nbsp
		  </div></div>
		  </label>
		  <div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
		  <label><b>Telephone</b><br/>		  
		  <?php echo form_checkbox(['value'=>$posts->telephone,'name'=>'telephone','class'=>'checkbox']);?>All rooms<br/>
		  <?php echo form_checkbox(['value'=>$posts->telephone,'name'=>'telephone','class'=>'checkbox']);?>Some rooms <br/>
		  </label></div></div>
		  <div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
		  <label><b>TV</b><br/>		  
		  <?php echo form_checkbox(['value'=>$posts->tv,'name'=>'tv','class'=>'checkbox']);?>All rooms<br/>
		  <?php echo form_checkbox(['value'=>$posts->tv,'name'=>'tv','class'=>'checkbox']);?>Some rooms <br/>
		  </label>
		  </div></div><div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
		  <label><b>Bathroom</b><br/>		  
		  <?php echo form_checkbox(['value'=>$posts->bathroom,'name'=>'bathroom','class'=>'checkbox']);?>All rooms<br/>
		  <?php echo form_checkbox(['value'=>$posts->bathroom,'name'=>'bathroom','class'=>'checkbox']);?>Some rooms <br/>
		  </label>
		  </div></div> <div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
		  <label><b>Hairdryer</b><br/>		  
		  <?php echo form_checkbox(['value'=>$posts->hairdryer,'name'=>'hairdryer','class'=>'checkbox']);?>All rooms<br/>
		  <?php echo form_checkbox(['value'=>$posts->hairdryer,'name'=>'hairdryer','class'=>'checkbox']);?>Some rooms <br/>
		  </label>
		  </div></div>  <div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
		  <label><b>Mosquito net</b><br/>		  
		  <?php echo form_checkbox(['value'=>$posts->mosquito_net,'name'=>'mosquito_net','class'=>'checkbox']);?>All rooms<br/>
		  <?php echo form_checkbox(['value'=>$posts->mosquito_net,'name'=>'mosquito_net','class'=>'checkbox']);?>Some rooms <br/>
		  </label>

		  </label> 
		  </div></div> <div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
		  <br/><br/><br/>
<label><h2><b>Payments</h2></b>
<p>This is the last section of listing your property! Specify the types of payment you accept, tax details and other options like cancellation policies.
</p>
Guest payment options
Can you charge credit cards at the property?
</div></div><div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
<?php echo form_radio(['value'=>$posts->credit_card,'name'=>'credit_card','class'=>'checkbox']);?>Yes <br/>
If yes, choose; American express, visa card, money transfer
<?php echo form_radio(['value'=>$posts->money_transfer,'name'=>'money_transfer','class'=>'checkbox']);?>No<br/>
<label></div></div>
<div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
<?php echo form_submit(['name'=>'submit','value'=>'Update Property','class'=>'hollow button success']);?>
<?php echo form_error('post_blog','<div class="text-danger">,</div>');?>
</label></div></div>
<?php echo form_close();?>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  '<strong>Oxy</strong>' : '' ?></p>
</div>

</body>
</html>

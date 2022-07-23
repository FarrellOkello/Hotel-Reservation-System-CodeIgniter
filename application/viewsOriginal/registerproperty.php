<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register property</title>
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
	<h1>Register property</h1>
	<div id="body">
<?php echo form_open_multipart('dashboard/regProperty');?>

<?php if($msg = $this->session->flashdata('response')):?>
            <div class="response"><?php echo $msg; ?> </div>
            <?php endif; ?>
			<?php $userid = $this->session->userdata('userid')?>
                         <?php $email = $this->session->userdata('email')?>
			<?php $username = $this->session->userdata('username')?>
			<?php $data = array('propertyOwnerid'=>$userid,
						'propertyOName'=>$username,'email'=>$email);  ?>
            <?php echo form_hidden($data)?>
			<div class="grid-x grid-padding-x">
              <div class="large-4 medium-4 cell">
<label>Property Name:</label>
	<?php echo form_input(['name'=>'propertyName',
	'placeholder'=>'Property name','class'=>'textbox','size'=>'4','required'=>'required']);?>
<?php echo form_error('propertyName','<div class="text-danger">,</div>');?>
</div>
<!-- <div class="grid-x grid-padding-x"> -->
<div class="large-4 medium-4 cell">
<label>Hotel Grade:
<select name="hotel_grade" value="">            
			<option value ="1">1</option>
			<option value ="2">2</option>
			<option value ="3">3</option>
			<option value ="4">4</option>
			<option value ="5">5</option>
          </select>
</label></div>
<!-- <div class="grid-x grid-padding-x"> -->
<div class="large-4 medium-4 cell">
<label>Contact Name/Person:
<?php echo form_input(['name'=>'Contact_person','placeholder'=>'Contact Name','class'=>'textbox',
'required'=>'required']);?>
<?php echo form_error('hotel_grade','<div class="text-danger">,</div>');?>
</label></div></div>
<div class="grid-x grid-padding-x">
<div class="large-4 medium-4 cell">
<label>Title/position of the contact person above:
<?php echo form_input(['name'=>'person_title','placeholder'=>'Title','class'=>'textbox',
'required'=>'required']);?>
<?php echo form_error('hotel_grade','<div class="text-danger">,</div>');?>
</label></div>
<!-- </div>
<div class="grid-x grid-padding-x"> -->
<div class="large-4 medium-4 cell">
<label>Contact number:
<?php echo form_input(['name'=>'contact_no','placeholder'=>'Contact number','class'=>'textbox',
'required'=>'required']);?>
<?php echo form_error('contact_no','<div class="text-danger">,</div>');?>
</label></div>
<!-- d-padding-x"> -->
<div class="large-4 medium-4 cell">
<label>Country where is your property located?
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
</select></div></div>
<div class="grid-x grid-padding-x">
<div class="large-4 medium-4 cell">
<label>Town/City:
<?php echo form_input(['name'=>'address','placeholder'=>'Contact number','class'=>'textbox',
'required'=>'required']);?>
<?php echo form_error('address','<div class="text-danger">,</div>');?>
</label></div></div>
<div class="grid-x grid-padding-x">
              <div class="large-12 cell">
<label>Description:
<?php echo form_textarea(['maxlength'=>'250','name'=>'description',
'height'=>'3','width'=>'10','placeholder'=>'Write something about the property in about 250words','class'=>'textbox',
'required'=>'required']);?>
<?php echo form_error('hotel_grade','<div class="text-danger">,</div>');?>
</label></div>
</div>
<div class="grid-x grid-padding-x"> 
<div class="large-4 medium-4 cell">
<label>
<?php echo form_upload(['name'=>'userfile','placeholder'=>'Save','class'=>'primary button',
'required'=>'required','multiple'=>'multiple','alt'=>'The must not exceed 100mb and maximum width is 1000 then the height is 700']);?>
<?php echo form_error('user','<div class="text-danger">,</div>');?>
</label></div></div>
<!-- </div><div class="grid-x grid-padding-x"> -->
<!-- <div class="large-4 medium-4 cell"> -->
<!-- <label> -->
</label>
<div class="grid-x grid-padding-x"> 
<div class="large-4 medium-4 cell">
<label>Internet/Wifi available to guests?
<!-- <div class="large-1 medium-1 cell"> -->
<select name="wifi" value="">            
			<option value ="No">No</option>
			<option value ="Yes, free">Yes, free</option>
			<option value ="Yes, Paid">Yes, Paid</option>
          </select>
          </div>
		 </label>
		<!-- </div><div class="grid-x grid-padding-x"> -->
<div class="large-4 medium-4 cell">
<label>Parking available to guests?*    
<!-- <div class="large-1 medium-1 cell"> -->
<select name="parking" value="">            
			<option value ="No">No</option>
			<option value ="Yes, free">Yes, free</option>
			<option value ="Yes, Paid">Yes, Paid</option>
          </select>
		  </div>
		<!-- </div> -->
</label>
<!-- <div class="grid-x grid-padding-x"> -->
<div class="large-4 medium-4 cell">
<label>Is breakfast available to guests?
<!-- <div class="large-1 medium-1 cell"> -->
<select name="breakfast" value="">            
			<option value ="No">No</option>
			<option value ="Yes, its included in the price">Yes, it's included in the price</option>
			<option value ="Yes, it's optional">Yes, it's optional</option>
          </select>
          </div>
</label></div>
<div class="grid-x grid-padding-x">
<div class="large-4 medium-4 cell">
<label>Languages spoke*
<!-- <div class="large-1 medium-1 cell"> -->
<select name="languages" value="">
            <option value="English">English</option>
            <option value="Afrikaans">Afrikaans</option>
			<option value ="Arabic">Arabic</option>
			<option value ="Azerbaijani">Azerbaijani</option>
			<option value ="Belarusian">Belarusian</option>
			<option value="Bosnian">Bosnian</option>
			<option value="Bulgarian">Bulgarian</option>
			<option value="Catalan">Catalan</option>
          </select></label>
		  <!-- <label>Languages spoke* -->
		  </div><div class="large-4 medium-4 cell">
		  <label>Languages spoke*
		  <select name="languages" value="">
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
		  <label>Languages spoke*
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
</label></div>
			<div class="grid-x grid-padding-x">
              <div class="large-12 cell">
		  <label> Tick what is available only<br/>
		  <?php echo form_checkbox(['name'=>'restaurant','class'=>'checkbox','value'=>'restaurant']);?>Restuarant &nbsp
		  <?php echo form_checkbox(['name'=>'frontdesk','class'=>'checkbox','value'=>'24 hour front desk']);?>24-hour front desk&nbsp
		  <?php echo form_checkbox(['name'=>'bar','class'=>'checkbox','value'=>'Bar']);?>Bar&nbsp
		  <?php echo form_checkbox(['name'=>'airport_shuttle','class'=>'checkbox','value'=>'Airport shuttle']);?> Airport shuttle&nbsp
		  </div> </div>
		  </label>
		  <div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
		  <label>Daily maid service
		  <select name="daily_maid_service" value="Daily maid service">            
			<option value ="No">No</option>
			<option value ="Yes, free">Yes, free</option>
			<option value ="Yes, Paid">Yes, Paid</option>
          </select>
		  </label>
		  </div>
		  </div>
		  <br/><label>
		  <div class="grid-x grid-padding-x">
              <div class="large-12 cell">
			  &nbsp <?php echo form_checkbox(['name'=>'additional_service','id'=>'checkbox1','class'=>'checkbox','value'=>'Airport shuttle']);?>Airport shuttle (additional charge)&nbsp
		  <?php echo form_checkbox(['name'=>'meeting_banquet_facilities','class'=>'checkbox','value'=>'Banquet facilities']);?>Meeting/banquet facilities   &nbsp
		  <?php echo form_checkbox(['name'=>'a_la_carte','class'=>'checkbox','value'=>'a la carte']);?>Restaurant (à la carte) &nbsp
		  <?php echo form_checkbox(['name'=>'luggage_storage','class'=>'checkbox','value'=>'Luggage storage']);?>Luggage storage &nbsp
		  <?php echo form_checkbox(['name'=>'non_smoking_rooms','class'=>'checkbox','value'=>'Non smoking rooms']);?>Non-smoking rooms &nbsp
		  <?php echo form_checkbox(['name'=>'air_conditioning','class'=>'checkbox','value'=>'Air conditioning']);?>Air conditioning &nbsp
		  <?php echo form_checkbox(['name'=>'massage','class'=>'checkbox','value'=>'Massage']);?>Massage<br/>&nbsp
		  <?php echo form_checkbox(['name'=>'garden','class'=>'checkbox','value'=>'Garden']);?>Garden&nbsp
		  <?php echo form_checkbox(['name'=>'buffet','class'=>'checkbox','value'=>'Restaurant buffet']);?>Restaurant(buffet) &nbsp
		  <?php echo form_checkbox(['name'=>'golf_course','class'=>'checkbox','value'=>'Golf course']);?>Golf course(within 3 km)&nbsp
		  <?php echo form_checkbox(['name'=>'family_rooms','class'=>'checkbox','value'=>'Family rooms']);?>Family rooms&nbsp
		  <?php echo form_checkbox(['name'=>'disabled_guests','class'=>'checkbox','value'=>'Facilities for disabled guests']);?>Facilities for disabled guests&nbsp
		  <?php echo form_checkbox(['name'=>'hiking','class'=>'checkbox','value'=>'Hiking']);?>Hiking<br/>&nbsp
		  <?php echo form_checkbox(['name'=>'spa_and_wellness','class'=>'checkbox','value'=>'Spa and wellness centre']);?>Spa and wellness centre&nbsp&nbsp
		  <?php echo form_checkbox(['name'=>'outdoor_pool','class'=>'checkbox','value'=>'Outdoor pool']);?>Outdoor pool
		  <?php echo form_checkbox(['name'=>'non_smoking_throughout','class'=>'checkbox','value'=>'Non smoking throughout']);?>Non-smoking throughout&nbsp
		  <?php echo form_checkbox(['name'=>'nightclub_dj','class'=>'checkbox','value'=>'Nightclub DJ']);?>Nightclub/DJ&nbsp
		  </label></div></div>
		<div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
		  <label><b>Telephone</b><br/>	
		  <input type="radio" name="telephone"
			<?php if (isset($telephone) && $telephone=="female") echo "checked";?>
			value="all rooms">All rooms
			<input type="radio" name="telephone"
			<?php if (isset($telephone) && $telephone=="male") echo "checked";?>
			value="Some rooms">Some rooms	  
		   </label>
		   </div></div>
		   <div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
		  <label><b>TV</b><br/>	
		  <input type="radio" name="tv"
			<?php if (isset($tv) && $tv=="female") echo "checked";?>
			value="all rooms">All rooms
			<input type="radio" name="tv"
			<?php if (isset($tv) && $tv=="male") echo "checked";?>
			value="Some rooms">Some rooms	 	  
		  <!-- <?php echo form_checkbox(['name'=>'tv','class'=>'checkbox','value'=>'All rooms']);?>All rooms<br/>
		  <?php echo form_checkbox(['name'=>'tv','class'=>'checkbox','value'=>'Some rooms']);?>Some rooms<br/> -->
		  </label>
		  </div></div><div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
		  <label><b>Bathroom</b><br/>
		  <input type="radio" name="bathroom"
			<?php if (isset($bathroom) && $bathroom=="female") echo "checked";?>
			value="all rooms">All rooms
			<input type="radio" name="bathroom"
			<?php if (isset($bathroom) && $bathroom=="male") echo "checked";?>
			value="Some rooms">Some rooms		  
		  <!-- <?php echo form_checkbox(['name'=>'bathroom','class'=>'checkbox','value'=>'All rooms']);?>All rooms<br/>
		  <?php echo form_checkbox(['name'=>'bathroom','class'=>'checkbox','value'=>'Some rooms']);?>Some rooms <br/> -->
		  </label>
		  </div></div> <div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
		  <label><b>Hairdryer</b><br/>	
		  <input type="radio" name="hairdryer"
			<?php if (isset($hairdryer) && $hairdryer=="female") echo "checked";?>
			value="all rooms">All rooms
			<input type="radio" name="hairdryer"
			<?php if (isset($hairdryer) && $hairdryer=="male") echo "checked";?>
			value="Some rooms">Some rooms	  
		  <!-- <?php echo form_checkbox(['name'=>'hairdryer','class'=>'checkbox','value'=>'All rooms']);?>All rooms<br/>
		  <?php echo form_checkbox(['name'=>'hairdryer','class'=>'checkbox','value'=>'Some rooms']);?>Some rooms <br/> -->
		  </label>
		  </div></div>  <div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
		  <label><b>Mosquito net</b><br/>	
		  <input type="radio" name="mosquito_net"
			<?php if (isset($mosquito_net) && $mosquito_net=="female") echo "checked";?>
			value="all rooms">All rooms
			<input type="radio" name="mosquito_net"
			<?php if (isset($mosquito_net) && $mosquito_net=="male") echo "checked";?>
			value="Some rooms">Some rooms	  
		  <!-- <?php echo form_checkbox(['name'=>'mosquito_net','class'=>'checkbox','value'=>'All rooms']);?>All rooms<br/> -->
		  <!-- <?php echo form_checkbox(['name'=>'mosquito_net','class'=>'checkbox','value'=>'Some rooms']);?>Some rooms<br/> -->
		  </label>

		  </label></div></div>  <div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
<label><h3><b>Payments</h3></b>
<p>Kindly specify the types of payment you accept, tax details and other options like cancellation policies.
</p>
Guest payment options
Can you charge credit cards at the property?
<!-- <label><b>Mosquito net</b><br/>	 -->
		  <input type="radio" name="credit_card"
			<?php if (isset($credit_card) && $credit_card=="yes") echo "checked";?>
			value="Yes">Yes
			<!-- <input type="checkbox" name  --><br/>
			<b>
			We only accept cash.</b>

			<input type="radio" name="credit_card"
			<?php if (isset($credit_card) && $credit_card=="male") echo "checked";?>
			value="No">No	<br/>
			</div></div><div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
<b><h3>Taxes</h3></b>
VAT/Tax <br/>
<input type="radio" name="taxes"
			<?php if (isset($taxes) && $taxes=="female") echo "checked";?>
			value="Default (18 %)">Default (18 %)<br/>
			<input type="radio" name="taxes"
			<?php if (isset($taxes) && $taxes=="male") echo "checked";?>
			value="I don't need to pay VAT">I don't need to pay VAT<br/>
			City tax<br/>
			<input type="radio" name="Citytaxes"
			<?php if (isset($Citytaxes) && $Citytaxes=="female") echo "checked";?>
			value="Default ( 2 US$/night )">Default ( 2 US$/night )<br/>
			<input type="radio" name="Citytaxes"
			<?php if (isset($Citytaxes) && $Citytaxes=="male") echo "checked";?>
			value="Custom"> Custom<br/>
			<b>How your commission works for you!</b>
			<ul>
			<li>One flat commission rate per booking (15%)</li>
			<li>Commission is only for bookings that stay</li>
			<li>24/7  support on phone, watsup or e-mail</li>
			<li>24 hr confirmations to save your time</li>
						</ul>
						</div></div><div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
			<h3>Commission payments</h3><br/>
			<p>At the beginning of each month, you will receive an invoice for total complete bookings <br/> in the previous month.
			</p>
			<table>
			<tr><td></td><td></td><td></td><td></td><td></td><td>Commission percentage:</td></tr>
			<tr>
			<!--  -->
			<td></td><td></td><td></td><td></td><td></td><td>15%</td></tr>
			</table>
			</div></div><div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
			<h3>Invoice details</h3><br/>
			Who is in charge of the invoice payment (e.g. legal/company name)?           
			<input type="type" name="invoice_person" value=""><br/>
			</div></div><div class="grid-x grid-padding-x">
		 <div class="large-4 medium-4 cell">
			Does this recipient have the same address as your property?<br/>
			<input type="radio" name="IPaddress"
			<?php if (isset($IPaddress) && $IPaddress=="female") echo "checked";?>
			value="Yes">Yes<br/>
			<input type="radio" name="IPaddress"
			<?php if (isset($IPaddress) && $IPaddress=="male") echo "checked";?>
			value="No"> No<br/>
			<input type="checkbox" name="acknoledge" value="yes" required> I confirm that the information given above about my property is true
			 and real to the best of my knowledge and I am responsible for any inconsistence. <br/>
			 <input type="checkbox" name="tncs" value="yes" required>
			  I have read and accepted to the terms and conditions of Bookers Africa 
 
<br/>
<?php echo form_submit(['name'=>'submit','value'=>'Complete your registration','class'=>'hollow button success']);?>
<!-- <?php echo form_error('post_blog','<div class="text-danger">,</div>');?> -->
</label></div></div>
<?php echo form_close();?>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  '<strong>Oxy</strong>' : '' ?></p>
</div>

</body>
</html>
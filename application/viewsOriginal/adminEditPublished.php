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
	<?php echo form_open_multipart('dashboard/adminUpdatePublished');?>
<?php if($msg = $this->session->flashdata('response')):?>
            <div class="response">
              <?php echo $msg; ?>
            </div>
            <?php endif; ?>
			<?php $data = array('Publish_id'=>$posts->Publish_id);  ?> 
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
<select name="propertyLocation" value= 
<?php echo $posts->Contact_person;?>>
	<option value="Afghanistan" title="Afghanistan">Afghanistan</option>
	<option value="Åland Islands" title="Åland Islands">Åland Islands</option>
	<option value="Albania" title="Albania">Albania</option>
	<option value="Algeria" title="Algeria">Algeria</option>
	<option value="American Samoa" title="American Samoa">American Samoa</option>
	<option value="Andorra" title="Andorra">Andorra</option>
	<option value="Angola" title="Angola">Angola</option>
	<option value="Anguilla" title="Anguilla">Anguilla</option>
	<option value="Antarctica" title="Antarctica">Antarctica</option>
	<option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</option>
	<option value="Argentina" title="Argentina">Argentina</option>
	<option value="Armenia" title="Armenia">Armenia</option>
	<option value="Aruba" title="Aruba">Aruba</option>
	<option value="Australia" title="Australia">Australia</option>
	<option value="Austria" title="Austria">Austria</option>
	<option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
	<option value="Bahamas" title="Bahamas">Bahamas</option>
	<option value="Bahrain" title="Bahrain">Bahrain</option>
	<option value="Bangladesh" title="Bangladesh">Bangladesh</option>
	<option value="Barbados" title="Barbados">Barbados</option>
	<option value="Belarus" title="Belarus">Belarus</option>
	<option value="Belgium" title="Belgium">Belgium</option>
	<option value="Belize" title="Belize">Belize</option>
	<option value="Benin" title="Benin">Benin</option>
	<option value="Bermuda" title="Bermuda">Bermuda</option>
	<option value="Bhutan" title="Bhutan">Bhutan</option>
	<option value="Bolivia, Plurinational State of" title="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
	<option value="Bonaire, Sint Eustatius and Saba" title="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
	<option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
	<option value="Botswana" title="Botswana">Botswana</option>
	<option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
	<option value="Brazil" title="Brazil">Brazil</option>
	<option value="British Indian Ocean Territory" title="British Indian Ocean Territory">British Indian Ocean Territory</option>
	<option value="Brunei Darussalam" title="Brunei Darussalam">Brunei Darussalam</option>
	<option value="Bulgaria" title="Bulgaria">Bulgaria</option>
	<option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
	<option value="Burundi" title="Burundi">Burundi</option>
	<option value="Cambodia" title="Cambodia">Cambodia</option>
	<option value="Cameroon" title="Cameroon">Cameroon</option>
	<option value="Canada" title="Canada">Canada</option>
	<option value="Cape Verde" title="Cape Verde">Cape Verde</option>
	<option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
	<option value="Central African Republic" title="Central African Republic">Central African Republic</option>
	<option value="Chad" title="Chad">Chad</option>
	<option value="Chile" title="Chile">Chile</option>
	<option value="China" title="China">China</option>
	<option value="Christmas Island" title="Christmas Island">Christmas Island</option>
	<option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
	<option value="Colombia" title="Colombia">Colombia</option>
	<option value="Comoros" title="Comoros">Comoros</option>
	<option value="Congo" title="Congo">Congo</option>
	<option value="Congo, the Democratic Republic of the" title="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
	<option value="Cook Islands" title="Cook Islands">Cook Islands</option>
	<option value="Costa Rica" title="Costa Rica">Costa Rica</option>
	<option value="Côte d'Ivoire" title="Côte d'Ivoire">Côte d'Ivoire</option>
	<option value="Croatia" title="Croatia">Croatia</option>
	<option value="Cuba" title="Cuba">Cuba</option>
	<option value="Curaçao" title="Curaçao">Curaçao</option>
	<option value="Cyprus" title="Cyprus">Cyprus</option>
	<option value="Czech Republic" title="Czech Republic">Czech Republic</option>
	<option value="Denmark" title="Denmark">Denmark</option>
	<option value="Djibouti" title="Djibouti">Djibouti</option>
	<option value="Dominica" title="Dominica">Dominica</option>
	<option value="Dominican Republic" title="Dominican Republic">Dominican Republic</option>
	<option value="Ecuador" title="Ecuador">Ecuador</option>
	<option value="Egypt" title="Egypt">Egypt</option>
	<option value="El Salvador" title="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea" title="Eritrea">Eritrea</option>
	<option value="Estonia" title="Estonia">Estonia</option>
	<option value="Ethiopia" title="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands (Malvinas)" title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
	<option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
	<option value="Fiji" title="Fiji">Fiji</option>
	<option value="Finland" title="Finland">Finland</option>
	<option value="France" title="France">France</option>
	<option value="French Guiana" title="French Guiana">French Guiana</option>
	<option value="French Polynesia" title="French Polynesia">French Polynesia</option>
	<option value="French Southern Territories" title="French Southern Territories">French Southern Territories</option>
	<option value="Gabon" title="Gabon">Gabon</option>
	<option value="Gambia" title="Gambia">Gambia</option>
	<option value="Georgia" title="Georgia">Georgia</option>
	<option value="Germany" title="Germany">Germany</option>
	<option value="Ghana" title="Ghana">Ghana</option>
	<option value="Gibraltar" title="Gibraltar">Gibraltar</option>
	<option value="Greece" title="Greece">Greece</option>
	<option value="Greenland" title="Greenland">Greenland</option>
	<option value="Grenada" title="Grenada">Grenada</option>
	<option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
	<option value="Guam" title="Guam">Guam</option>
	<option value="Guatemala" title="Guatemala">Guatemala</option>
	<option value="Guernsey" title="Guernsey">Guernsey</option>
	<option value="Guinea" title="Guinea">Guinea</option>
	<option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
	<option value="Guyana" title="Guyana">Guyana</option>
	<option value="Haiti" title="Haiti">Haiti</option>
	<option value="Heard Island and McDonald Islands" title="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
	<option value="Holy See (Vatican City State)" title="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
	<option value="Honduras" title="Honduras">Honduras</option>
	<option value="Hong Kong" title="Hong Kong">Hong Kong</option>
	<option value="Hungary" title="Hungary">Hungary</option>
	<option value="Iceland" title="Iceland">Iceland</option>
	<option value="India" title="India">India</option>
	<option value="Indonesia" title="Indonesia">Indonesia</option>
	<option value="Iran, Islamic Republic of" title="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
	<option value="Iraq" title="Iraq">Iraq</option>
	<option value="Ireland" title="Ireland">Ireland</option>
	<option value="Isle of Man" title="Isle of Man">Isle of Man</option>
	<option value="Israel" title="Israel">Israel</option>
	<option value="Italy" title="Italy">Italy</option>
	<option value="Jamaica" title="Jamaica">Jamaica</option>
	<option value="Japan" title="Japan">Japan</option>
	<option value="Jersey" title="Jersey">Jersey</option>
	<option value="Jordan" title="Jordan">Jordan</option>
	<option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
	<option value="Kenya" title="Kenya">Kenya</option>
	<option value="Kiribati" title="Kiribati">Kiribati</option>
	<option value="Korea, Democratic People's Republic of" title="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
	<option value="Korea, Republic of" title="Korea, Republic of">Korea, Republic of</option>
	<option value="Kuwait" title="Kuwait">Kuwait</option>
	<option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
	<option value="Lao People's Democratic Republic" title="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
	<option value="Latvia" title="Latvia">Latvia</option>
	<option value="Lebanon" title="Lebanon">Lebanon</option>
	<option value="Lesotho" title="Lesotho">Lesotho</option>
	<option value="Liberia" title="Liberia">Liberia</option>
	<option value="Libya" title="Libya">Libya</option>
	<option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
	<option value="Lithuania" title="Lithuania">Lithuania</option>
	<option value="Luxembourg" title="Luxembourg">Luxembourg</option>
	<option value="Macao" title="Macao">Macao</option>
	<option value="Macedonia, the former Yugoslav Republic of" title="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
	<option value="Madagascar" title="Madagascar">Madagascar</option>
	<option value="Malawi" title="Malawi">Malawi</option>
	<option value="Malaysia" title="Malaysia">Malaysia</option>
	<option value="Maldives" title="Maldives">Maldives</option>
	<option value="Mali" title="Mali">Mali</option>
	<option value="Malta" title="Malta">Malta</option>
	<option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
	<option value="Martinique" title="Martinique">Martinique</option>
	<option value="Mauritania" title="Mauritania">Mauritania</option>
	<option value="Mauritius" title="Mauritius">Mauritius</option>
	<option value="Mayotte" title="Mayotte">Mayotte</option>
	<option value="Mexico" title="Mexico">Mexico</option>
	<option value="Micronesia, Federated States of" title="Micronesia, Federated States of">Micronesia, Federated States of</option>
	<option value="Moldova, Republic of" title="Moldova, Republic of">Moldova, Republic of</option>
	<option value="Monaco" title="Monaco">Monaco</option>
	<option value="Mongolia" title="Mongolia">Mongolia</option>
	<option value="Montenegro" title="Montenegro">Montenegro</option>
	<option value="Montserrat" title="Montserrat">Montserrat</option>
	<option value="Morocco" title="Morocco">Morocco</option>
	<option value="Mozambique" title="Mozambique">Mozambique</option>
	<option value="Myanmar" title="Myanmar">Myanmar</option>
	<option value="Namibia" title="Namibia">Namibia</option>
	<option value="Nauru" title="Nauru">Nauru</option>
	<option value="Nepal" title="Nepal">Nepal</option>
	<option value="Netherlands" title="Netherlands">Netherlands</option>
	<option value="New Caledonia" title="New Caledonia">New Caledonia</option>
	<option value="New Zealand" title="New Zealand">New Zealand</option>
	<option value="Nicaragua" title="Nicaragua">Nicaragua</option>
	<option value="Niger" title="Niger">Niger</option>
	<option value="Nigeria" title="Nigeria">Nigeria</option>
	<option value="Niue" title="Niue">Niue</option>
	<option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
	<option value="Northern Mariana Islands" title="Northern Mariana Islands">Northern Mariana Islands</option>
	<option value="Norway" title="Norway">Norway</option>
	<option value="Oman" title="Oman">Oman</option>
	<option value="Pakistan" title="Pakistan">Pakistan</option>
	<option value="Palau" title="Palau">Palau</option>
	<option value="Palestinian Territory, Occupied" title="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
	<option value="Panama" title="Panama">Panama</option>
	<option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
	<option value="Paraguay" title="Paraguay">Paraguay</option>
	<option value="Peru" title="Peru">Peru</option>
	<option value="Philippines" title="Philippines">Philippines</option>
	<option value="Pitcairn" title="Pitcairn">Pitcairn</option>
	<option value="Poland" title="Poland">Poland</option>
	<option value="Portugal" title="Portugal">Portugal</option>
	<option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
	<option value="Qatar" title="Qatar">Qatar</option>
	<option value="Réunion" title="Réunion">Réunion</option>
	<option value="Romania" title="Romania">Romania</option>
	<option value="Russian Federation" title="Russian Federation">Russian Federation</option>
	<option value="Rwanda" title="Rwanda">Rwanda</option>
	<option value="Saint Barthélemy" title="Saint Barthélemy">Saint Barthélemy</option>
	<option value="Saint Helena, Ascension and Tristan da Cunha" title="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
	<option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
	<option value="Saint Martin (French part)" title="Saint Martin (French part)">Saint Martin (French part)</option>
	<option value="Saint Pierre and Miquelon" title="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
	<option value="Saint Vincent and the Grenadines" title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
	<option value="Samoa" title="Samoa">Samoa</option>
	<option value="San Marino" title="San Marino">San Marino</option>
	<option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe</option>
	<option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
	<option value="Senegal" title="Senegal">Senegal</option>
	<option value="Serbia" title="Serbia">Serbia</option>
	<option value="Seychelles" title="Seychelles">Seychelles</option>
	<option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
	<option value="Singapore" title="Singapore">Singapore</option>
	<option value="Sint Maarten (Dutch part)" title="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
	<option value="Slovakia" title="Slovakia">Slovakia</option>
	<option value="Slovenia" title="Slovenia">Slovenia</option>
	<option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
	<option value="Somalia" title="Somalia">Somalia</option>
	<option value="South Africa" title="South Africa">South Africa</option>
	<option value="South Georgia and the South Sandwich Islands" title="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
	<option value="South Sudan" title="South Sudan">South Sudan</option>
	<option value="Spain" title="Spain">Spain</option>
	<option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
	<option value="Sudan" title="Sudan">Sudan</option>
	<option value="Suriname" title="Suriname">Suriname</option>
	<option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
	<option value="Swaziland" title="Swaziland">Swaziland</option>
	<option value="Sweden" title="Sweden">Sweden</option>
	<option value="Switzerland" title="Switzerland">Switzerland</option>
	<option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab Republic</option>
	<option value="Taiwan, Province of China" title="Taiwan, Province of China">Taiwan, Province of China</option>
	<option value="Tajikistan" title="Tajikistan">Tajikistan</option>
	<option value="Tanzania, United Republic of" title="Tanzania, United Republic of">Tanzania, United Republic of</option>
	<option value="Thailand" title="Thailand">Thailand</option>
	<option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
	<option value="Togo" title="Togo">Togo</option>
	<option value="Tokelau" title="Tokelau">Tokelau</option>
	<option value="Tonga" title="Tonga">Tonga</option>
	<option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
	<option value="Tunisia" title="Tunisia">Tunisia</option>
	<option value="Turkey" title="Turkey">Turkey</option>
	<option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
	<option value="Turks and Caicos Islands" title="Turks and Caicos Islands">Turks and Caicos Islands</option>
	<option value="Tuvalu" title="Tuvalu">Tuvalu</option>
	<option value="Uganda" title="Uganda">Uganda</option>
	<option value="Ukraine" title="Ukraine">Ukraine</option>
	<option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates</option>
	<option value="United Kingdom" title="United Kingdom">United Kingdom</option>
	<option value="United States" title="United States">United States</option>
	<option value="United States Minor Outlying Islands" title="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
	<option value="Uruguay" title="Uruguay">Uruguay</option>
	<option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu" title="Vanuatu">Vanuatu</option>
	<option value="Venezuela, Bolivarian Republic of" title="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
	<option value="Viet Nam" title="Viet Nam">Viet Nam</option>
	<option value="Virgin Islands, British" title="Virgin Islands, British">Virgin Islands, British</option>
	<option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
	<option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna</option>
	<option value="Western Sahara" title="Western Sahara">Western Sahara</option>
	<option value="Yemen" title="Yemen">Yemen</option>
	<option value="Zambia" title="Zambia">Zambia</option>
	<option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
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

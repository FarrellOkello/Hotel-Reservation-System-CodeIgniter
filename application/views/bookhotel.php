<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Welcome to fronthotels</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/foundation.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('dist/css/skins/_all-skins.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/cakeform.css');?>">
	<!-- <link href="assets/css/cakeform.css" rel="stylesheet" type="text/css" /> -->
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
		background-color: grey;
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	
</head>
<style>
.mySlides {display:none;}
</style>
<body onload='hideTotal()'>

<div id="container">
<div class="navbar navbar-default">
<h1><img src="<?php echo base_url('assets/img/fronthotels.jpg');?>"
	height=35 width= 100>
	FRONT HOTELS</h1>	
<div  class="collapse navbar-collapse pull-left" id="navbar-collapse" >
<!--   -->
              <ul class="nav navbar-nav"> 
			  <li class="dropdown">
                  <a href="<?php echo base_url('dashboard');?>" >Home</a>               
                </li>               
                <li class="dropdown">           
                </li>
				<li class="dropdown">
                  <a href="<?php echo base_url('dashboard/registerproperty');?>" >Register property</a>              
				<li class="dropdown">
				<li class="dropdown">
                  <a href="<?php echo base_url('dashboard/signup');?>" >Signup</a>              
				<li class="dropdown">
                  <a href="<?php echo base_url('dashboard/signin');?>" >Signin</a>               
                </li>
				<li class="dropdown">
                  <a href="<?php echo base_url('dashboard/contact');?>" >Contact us</a>               
                </li>
				<li class="dropdown">
                  <a href="<?php echo base_url('dashboard/logout');?>" >Logout</a>               
                </li>
              </ul>
			  </div>
              <!-- <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                </div> -->
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
<?php echo form_close();?>
<div class="grid-x grid-padding-x">
<div class="large-4 medium-4 cell">     
          <fieldset>
		  <div class="callout">
		  <div class="large-4 medium-4 cell">				
<?=form_open('dashboard/checkavailability');?>
<?php $checkin = array('name'=>'checkin','value'=>'checkin','type'=>'date','class'=>'form-control');?>
<?php $checkout = array('name'=>'checkout','value'=>'checkin','type'=>'date','class'=>'form-control');?></div>
<?=form_input($checkin);?>
<?=form_input($checkout);?>
<input type=submit value='Check availability' class='btn btn-primary btn-block btn-flat' />
</fieldset>
	      <!-- </div> -->
        </div>
        <div class="large-8 medium-8 cell">
		<div class="grid-x grid-padding-x">
		
<!-- 		
		<div class="large-4 medium-4 small-4 cell">
              <!-- <div class="primary callout"> -->
			 
			</div>	
		<div class="large-4 medium-4 small-4 cell">
              <!-- <div class="primary callout"> -->
		
		</div>
		<div class="large-4 medium-4 small-4 cell">
              <!-- <div class="primary callout"> 
	</p>
		</div> -->
		<?php if($msg = $this->session->flashdata('response')):?>
            <div class="response">
              <?php echo $msg; ?>
            </div>
            <?php endif; ?>
		<?php echo form_close();?>
<table><tr><th><?php echo $hotel->propertyName;?><th></th><th></th></tr>
<tr> <td> <img src=<?php echo $hotel->img;?> height='121' width='150'>
</td><td><?php echo $hotel->hairdryer;?> <?php echo $hotel->breakfast;?></td><td>
<?php echo $hotel->breakfast;?>
<?php echo $hotel->description ?></td></tr>
<tr></tr>
</table>
<?php echo form_open_multipart('dashboard/submitbooking');?>
<div class="cont_order">
<table>
<tr><th></th><th><B>Room type:</b></th><th><B>No of rooms:</b></th><th><B>Facility & Services:</b></th>
<th><B>Guest capacity:</b></th><th><B>Today's price</b></th><th></th>
</tr>
<?php if(count($rooms)):?>
<?php foreach($rooms as $room):?>
<td><!--<div class="w3-content w3-display-container">
  <img class="mySlides" src="<?php echo $room->Rimg;?>" style="width:100%">
  <img class="mySlides" src="<?php echo $room->Rimg;?>" style="width:100%">
  <img class="mySlides" src="<?php echo $room->Rimg;?>" style="width:100%">
  <img class="mySlides" src="<?php echo $room->Rimg;?>" style="width:100%">
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)" nosubmit >&#10095;</button>
</div>--></td>
<?php echo form_open_multipart('dashboard/submitbooking');?>
<td><?php echo $room->roomType;?></td>
<td><br/>	<?php echo $room->no_of_rooms; ?>
</td>
<td>Breakfast:
	<?php echo $room->breakfast;?><br/>
	Smoking policy:
	<?php echo $room->Smoking_policy;?><br/>
	Wifi:
	<?php echo $room->wifi;?><br/>
	Parking:
	<?php echo $hotel->parking;?><br/>
	Tv:
	<?php echo $hotel->tv;?><br/>
	Bathroom:
	<?php echo $hotel->bathroom;?><br/>
	Hairdryer:
	<?php echo $hotel->hairdryer;?><br/>
	Telephone:
	<?php echo $hotel->telephone;?><br/>
	Mosquito net:
	<?php echo $hotel->mosquito_net;?><br/>
	<!-- Breakfast:
	<?php echo $hotel->breakfast;?><br/> -->	
</td>
<td><?php echo $room->no_of_guests;?></td>
<td><b>$ </b><?php echo $room->price_per_night;?></td>
<td><?php echo anchor("dashboard/orderroom/{$room->room_id}","Book now",["class"=>"btn btn-primary btn-block btn-flat"]);?><br/>
<div id="totalPrice"></div>
</td>
</tr><?php endforeach;?>
<?php else:?>
<p> There are no rooms for this property yet abeg!
<?php endif;?></table>
<!-- <input type='submit' id='submit' value='Submit' onclick="calculateTotal()" /> -->
	</div>
</form>
<!-- <?php echo form_open_multipart('dashboard/submitbooking');?>
<?php $data = array('propertyName'=>$hotel->propertyName,'no_of_people'=>$hotel->contact_no
              ,'client_id'=>'');  ?>
            <?php echo form_hidden($data)?>
<label>Customer Name:
<?php echo form_input(['name'=>'customer_name','placeholder'=>'','value'=>$username,'class'=>'textbox']);?>
</label>
<label>Customer email:
<?php echo form_input(['name'=>'customer_email','placeholder'=>'','value'=>'Email address','class'=>'textbox']);?>
</label>
<label>Customer Contact:
<?php echo form_input(['name'=>'customer_contact','placeholder'=>'','value'=>'Phone Number','class'=>'textbox']);?>
</label>
<label>No. of rooms:
<?php echo form_input(['name'=>'no_of_rooms','placeholder'=>'','value'=>'rooms','class'=>'textbox']);?>
</label>
<div class="large-2 medium-2 cell">
<label>Check in:
<?php echo form_input(['name'=>'checkin','placeholder'=>'Check in','class'=>'time','type'=>'date']);?>
</div>
</label>
<div class="large-2 medium-2 cell">
<label>Check out:
<?php echo form_input(['name'=>'checkout','placeholder'=>'check out','class'=>'textbox','type'=>'date']);?>
</label><br/>
<label>
<h3>Total Price: $ <?php echo  $totalprice; ?></h3>
<div id="totalPrice"></div>
</label>
</div> -->

<!-- <?php echo form_submit(['name'=>'submit','value'=>'Submit Booking','class'=>'danger button success']);?></td></tr>
<tr></tr>
<?php echo form_close();?> -->

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> 
    seconds. <?php echo  (ENVIRONMENT === 'development') ? 
     'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
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
<script>

    /*
This source is shared under the terms of LGPL 3
www.gnu.org/licenses/lgpl.html

You are free to use the code in Commercial or non-commercial projects
*/

 //Set up an associative array
 //The keys represent the size of the cake
 //The values represent the cost of the cake i.e A 10" cake cost's $35
//  var cake_prices = new Array();
//  cake_prices["Round6"]=20;
//  cake_prices["Round8"]=25;
//  cake_prices["Round10"]=35;
//  cake_prices["Round12"]=75;
 
 //Set up an associative array 
 //The keys represent the filling type
 //The value represents the cost of the filling i.e. Lemon filling is $5,Dobash filling is $9
 //We use this this array when the user selects a filling from the form
 var filling_prices= new Array();
 filling_prices["None"]=0;
 filling_prices["Lemon"]=5;
 filling_prices["Custard"]=5;
 filling_prices["Fudge"]=7;
 filling_prices["Mocha"]=8;
 filling_prices["Raspberry"]=10;
 filling_prices["Pineapple"]=5;
 filling_prices["Dobash"]=9;
 filling_prices["Mint"]=5;
 filling_prices["Cherry"]=5;
 filling_prices["Apricot"]=8;
 filling_prices["Buttercream"]=7;
 filling_prices["Chocolate Mousse"]=12;
 
	 
	 
// getCakeSizePrice() finds the price based on the size of the cake.
// Here, we need to take user's the selection from radio button selection
// function getCakeSizePrice()
// {  
//     var cakeSizePrice=0;
//     //Get a reference to the form id="cakeform"
//     var theForm = document.forms["cakeform"];
    //Get a reference to the cake the user Chooses name=selectedCake":
    // var selectedCake = theForm.elements["selectedcake"];
    //Here since there are 4 radio buttons selectedCake.length = 4
    //We loop through each radio buttons
    // for(var i = 0; i < selectedCake.length; i++)
    // {
    //     //if the radio button is checked
    //     if(selectedCake[i].checked)
    //     {
    //         //we set cakeSizePrice to the value of the selected radio button
    //         //i.e. if the user choose the 8" cake we set it to 25
    //         //by using the cake_prices array
    //         //We get the selected Items value
    //         //For example cake_prices["Round8".value]"
    //         cakeSizePrice = cake_prices[selectedCake[i].value];
    //         //If we get a match then we break out of this loop
    //         //No reason to continue if we get a match
    //         break;
    //     }
    // }
//     //We return the cakeSizePrice
//     return cakeSizePrice;
// }

//This function finds the filling price based on the 
//drop down selection
function getFillingPrice()
{
    var cakeFillingPrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling = theForm.elements["filling"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice = filling_prices[selectedFilling.value];

    //finally we return cakeFillingPrice
    return cakeFillingPrice;
}

//candlesPrice() finds the candles price based on a check box selection
// function candlesPrice()
// {
//     var candlePrice=0;
//     //Get a reference to the form id="cakeform"
//     var theForm = document.forms["cakeform"];
//     //Get a reference to the checkbox id="includecandles"
//     var includeCandles = theForm.elements["includecandles"];

//     //If they checked the box set candlePrice to 5
//     if(includeCandles.checked==true)
//     {
//         candlePrice=5;
//     }
//     //finally we return the candlePrice
//     return candlePrice;
// }

// function insciptionPrice()
// {
//     //This local variable will be used to decide whether or not to charge for the inscription
//     //If the user checked the box this value will be 20
//     //otherwise it will remain at 0
//     var inscriptionPrice=0;
//     //Get a refernce to the form id="cakeform"
//     var theForm = document.forms["cakeform"];
//     //Get a reference to the checkbox id="includeinscription"
//     var includeInscription = theForm.elements["includeinscription"];
//     //If they checked the box set inscriptionPrice to 20
//     if(includeInscription.checked==true){
//         inscriptionPrice=20;
//     }
//     //finally we return the inscriptionPrice
//     return inscriptionPrice;
// }
        
function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together  getCakeSizePrice() +
    var cakePrice = getFillingPrice() // + candlesPrice() + insciptionPrice();
    
    //display the result
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Price For the Cake $"+cakePrice;

}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}
</script>
</body>
</html>
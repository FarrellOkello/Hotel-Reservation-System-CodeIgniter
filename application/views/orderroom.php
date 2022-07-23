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
	<style type="text/css">
    <link href="assets/css/cakeform.css" rel="stylesheet" type="text/css" />
	

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
<body onload='hideTotal()'>

<div id="container">
<div class="navbar navbar-default">
<h1><img src="<?php echo base_url('assets/img/fronthotels.jpg');?>"
	height=35 width= 100>
	FRONT HOTELS</h1>	
<div  class="collapse navbar-collapse pull-left" id="navbar-collapse" >
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
</form>
</div>
<div class="small-12 medium-6 large-3 columns">
<div class="side-nav">
<?php $username = $this->session->userdata('username')?>
<h1 class="greeting">Welcome      <?php echo $username;?></h1>
</div>

</div>
<?php echo form_close();?>
<div class="grid-x grid-padding-x">
<div class="large-4 medium-4 cell">     
          <div class="callout">	
		  <div class="large-4 medium-4 cell">				
<?=form_open('dashboard/search');?>
<H2>Advertising Area</H2>
</div>
          </div>
        </div>
        <div class="large-8 medium-8 cell">
        <script language="javascript" type="text/javascript">
// <!--
var myVar = calculateTotal();
document.write (myVar);
//-->
</script>
<!-- </bod -->
        <table>
<tr><th><B>Room type:</b></th><th><B>No of rooms:</b></th><th><B>Facility & Services:</b></th>
<th><B>UgShs:</b></th><th><B>Today's price</b></th><th></th>
</tr>
<td><?php echo $rooms->roomType;?></td>
<td><br/>	<?php echo $rooms->no_of_rooms; ?>
</td>
<td>Breakfast:
	<?php echo $rooms->breakfast;?><br/>
	Smoking policy:
	<?php echo $rooms->Smoking_policy;?><br/>
	Wifi:
	<?php echo $rooms->wifi;?>
	Breakfast:
	<?php echo $rooms->breakfast;?><br/>
	Breakfast:
	<?php echo $rooms->breakfast;?><br/>
	Breakfast:
	<?php echo $rooms->breakfast;?><br/>
	Smoking policy:
	<?php echo $rooms->Smoking_policy;?><br/>
	Wifi:
	<?php echo $rooms->wifi;?>
	Breakfast:
	<?php echo $rooms->breakfast;?><br/>
	Breakfast:
	<?php echo $rooms->breakfast;?><br/>
	
</td>
<td><?php echo $rooms->price_per_night;?></td>
<td><?php echo $rooms->no_of_guests;?></td>
<td><br/>
</td>
</tr></table>
<tr>
</tr></tr>
</table>
<!-- <?php echo form_open_multipart('dashboard/submitbooking');?> -->
<div class="cont_order">
	</div>
</form>
<?php $attributes = array('name'=>'cakeform','id'=>'cakeform');?>
<?php echo form_open_multipart('dashboard/submitbooking', $attributes);?>
<!-- <?php echo form_open_multipart('dashboard/submitbooking');?> -->
 <?php $data = array('property_id'=>$rooms->hotel_id,
 'propertyOwnerid'=>$rooms->propertyOwnerid,'propertyName'=>$rooms->propertyName,'client_id'=> $username,
        'roomType'=>$rooms->roomType);  ?>
            <?php echo form_hidden($data)?>
            <div id="wrap">
        <!-- <form action="<?php echo base_url('dashboard/submitbooking');?>" 
        name="cakeform" onsubmit="return true;"> -->
        <!-- <div> -->
        <fieldset>
            <?php $checkin = array('name'=>'checkin','value'=>'checkin','type'=>'date','required'=>'required','class'=>'form-control');?>
            <?php $checkout = array('name'=>'checkout','value'=>'checkin','type'=>'date','required'=>'required','class'=>'form-control');?>        
            <!-- <div class="large-2 medium-2 cell"> -->
            <label>Check in:
            <?=form_input($checkin);?>
            <!-- </div> -->
            </label>
            <div class="large-2 medium-2 cell">
            <label>Check out:
            <?=form_input($checkout);?>
            </div></label>
            <div class="cont_order">
              
                <label >No of Rooms</label>         
                <select id="filling" name='no_of_rooms' onchange="calculateTotal()", required='required' class='form-control'>
                <option value="None">Select no. of rooms</option>
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
                <option value="12">12</option>
               </select>
                <br/>
                <p>
                <label for='includecandles' class="inlinelabel">
                
               </p>            
              <div id="totalPrice">
                </div>
                
                
                <!-- </fieldset> -->
            </div>
            
        	<div class="cont_details">

            	
                <legend>Contomer Details</legend>
                <div class="large-2 medium-2 cell">
                <label for='name'>Name</label>
                <input type="text" id="name" name='customer_name' required='required' class ='form-control'/>
                <br/>
                </div>
                <!-- <label for='address'>Address</label>
                <input type="text" id="address" name='address' class='form-control' />
                <br/> -->
                <label for='phonenumber'>Phone Number</label>
                <input type="text"  id="phonenumber" name='customer_contact' required='required' class='form-control'/>
                <br/>
                <label for='phonenumber'>Email address:</label>
                <input type="text"  id="phonenumber" name='customer_email' required='required' class='form-control'/>
                <br/>
                <label for='phonenumber'>Total amount:</label>
                <input type="text"   name="GrandTotal" value=""class='form-control'
                 onclick="calculateTotal()"/>
                <br/>               
            </div>
            <input type='submit' id='submit' class='btn btn-primary btn-flat' 
            value='Book now' onclick="calculateTotal()" />
           </div> </fieldset>
       </form>
	</div><!--End of wrap-->
<!-- <script> -->
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
 filling_prices["0"]=0;
 filling_prices["1"]=1;
 filling_prices["2"]=2;
 filling_prices["3"]=3;
 filling_prices["4"]=4;
 filling_prices["5"]=5;
 filling_prices["6"]=6;
 filling_prices["7"]=7;
 filling_prices["8"]=8;
 filling_prices["9"]=9;
 filling_prices["10"]=10;
 filling_prices["11"]=11;
 filling_prices["12"]=12;
 
	 
	
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
function candlesPrice()
{
    var candlePrice = 0;
    candlePrice= <?php echo $rooms->price_per_night;?>;
    //Get a reference to the form id="cakeform"
    // var theForm = document.forms["cakeform"];
    // //Get a reference to the checkbox id="includecandles"
    // var includeCandles = theForm.elements["includecandles"];

    // //If they checked the box set candlePrice to 5
    // if(includeCandles.checked==true)
    // {
    //     candlePrice= <?php echo $rooms->price_per_night;?>;
    // }
    // //finally we return the candlePrice
    return candlePrice;
}
// function toto()
// {
//     var candlePrice = 0;
//     //Get a reference to the form id="cakeform"
//     var theForm = document.forms["cakeform"];
//     //Get a reference to the checkbox id="includecandles"
//     var includeCandles = theForm.elements["toto"];

//     //If they checked the box set candlePrice to 5
//     if(includeCandles.checked==true)
//     {
//         candlePrice= <?php echo $rooms->price_per_night;?>;
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
    //Each function returns a number so by calling them we
    // add the values they return together  getCakeSizePrice() +
    var cakePrice = getFillingPrice() * candlesPrice(); // + insciptionPrice();
    
    // //display the result
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Price is $ "+cakePrice;

    // Totamt = 
    //  eval(TotA) +
    //  eval(TotB) +
    //  eval(TotC) ;
    
  document.cakeform.GrandTotal.value = cakePrice; 

}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}
</script>
</body>
</html>
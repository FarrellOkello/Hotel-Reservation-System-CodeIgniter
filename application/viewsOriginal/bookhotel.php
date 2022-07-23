<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
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

<h1><img src="https://fronttours.com/fronthotels/assets/img/fronthotels.jpg"height=35 width= 100>
               Front Hotels
</h1>	
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
</div>
<?php echo form_close();?>

<!--the check availabilty part is here-->   
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
</div>

        <div class="large-8 medium-8 cell">
	<div class="grid-x grid-padding-x">
	<?php if($msg = $this->session->flashdata('response')):?>
        <div class="response"><?php echo $msg; ?> </div>
         <?php endif; ?>

<!--//another test thingie here -->
<div class="row">
    <ul class="gallery">
 <?php if(count($files)):?>
<?php foreach($files as $file):?>           
<a href="<?php echo $file->photo_url;?>">
 <img src="<?php echo $file->photo_url;?>" height='121' width='150'> </a>
<?php endforeach;?>
<?php else:?>
 <p>This hotel does not have photos yet!</p>
<?php endif;?>
    </ul>
</div>
<table>
<tr><th><?php echo $hotel->propertyName;?><th></th><th></th></tr>
<!--<tr> <td> <img src=<?php echo $hotel->img;?> height='121' width='150'></td>
<td> <img src=<?php echo $hotel->img;?> height='121' width='150'></td>
<td> <img src=<?php echo $hotel->img;?> height='121' width='150'></td></tr>
<tr><td> <img src=<?php echo $hotel->img;?> height='121' width='150'></td>-->
<td><?php echo $hotel->hairdryer;?> <?php echo $hotel->breakfast;?></td>
<td><?php echo $hotel->breakfast;?><?php echo $hotel->description ?></td></tr>
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
<td></td>
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
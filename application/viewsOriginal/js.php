<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <title>Cake Form</title>
    <!-- <script type="text/javascript" src="js/formcalculations.js"></script> -->
    <link href="assets/css/cakeform.css" rel="stylesheet" type="text/css" />
</head>
<body onload='hideTotal()'>
    <div id="wrap">
        <form action="" id="cakeform" onsubmit="return false;">
        <div>
            <div class="cont_order">
               <fieldset>
                <!-- <legend>Make your cake!</legend>
                <label >Size Of the Cake</label>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round6" onclick="calculateTotal()" />Round cake 6" -  serves 8 people ($20)</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round8" onclick="calculateTotal()" />Round cake 8" - serves 12 people ($25)</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round10" onclick="calculateTotal()" />Round cake 10" - serves 16 people($35)</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round12" onclick="calculateTotal()" />Round cake 12" - serves 30 people($75)</label><br/>
                <br/> -->
                <label >Filling</label>
         
                <select id="filling" name='filling' onchange="calculateTotal()">
                <option value="None">Select Filling</option>
                <option value="Lemon">Lemon($5)</option>
                <option value="Custard">Custard($5)</option>
                <option value="Fudge">Fudge($7)</option>
                <option value="Mocha">Mocha($8)</option>
                <option value="Raspberry">Raspberry($10)</option>
                <option value="Pineapple">Pineapple($5)</option>
                <option value="Dobash">Dobash($9)</option>
                <option value="Mint">Mint($5)</option>
                <option value="Cherry">Cherry($5)</option>
                <option value="Apricot">Apricot($8)</option>
                <option value="Buttercream">Buttercream($7)</option>
                <option value="Chocolate Mousse">Chocolate Mousse($12)</option>
               </select>
                <br/>
                <p>
                <label for='includecandles' class="inlinelabel">Include Candles($5)</label>
               <input type="checkbox" id="includecandles" name='includecandles' onclick="calculateTotal()" />
               </p>
               
                <p>
                <label class="inlinelabel" for='includeinscription'>Include Inscription($20)</label>
                <input type="checkbox" id="includeinscription" name="includeinscription" onclick="calculateTotal()" />
                <input type="text"  id="theinscription" name="theinscription" value="Enter Inscription"  />
                </p>
                <div id="totalPrice"></div>
                
                </fieldset>
            </div>
            
        	<div class="cont_details">
            	<fieldset>
                <legend>Contact Details</legend>
                <label for='name'>Name</label>
                <input type="text" id="name" name='name' />
                <br/>
                <label for='address'>Address</label>
                <input type="text" id="address" name='address' />
                <br/>
                <label for='phonenumber'>Phone Number</label>
                <input type="text"  id="phonenumber" name='phonenumber'/>
                <br/>
                </fieldset>
            </div>
            <input type='submit' id='submit' value='Submit' onclick="calculateTotal()" />
        </div>  
       </form>
	</div><!--End of wrap-->
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
function candlesPrice()
{
    var candlePrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the checkbox id="includecandles"
    var includeCandles = theForm.elements["includecandles"];

    //If they checked the box set candlePrice to 5
    if(includeCandles.checked==true)
    {
        candlePrice=5;
    }
    //finally we return the candlePrice
    return candlePrice;
}

function insciptionPrice()
{
    //This local variable will be used to decide whether or not to charge for the inscription
    //If the user checked the box this value will be 20
    //otherwise it will remain at 0
    var inscriptionPrice=0;
    //Get a refernce to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the checkbox id="includeinscription"
    var includeInscription = theForm.elements["includeinscription"];
    //If they checked the box set inscriptionPrice to 20
    if(includeInscription.checked==true){
        inscriptionPrice=20;
    }
    //finally we return the inscriptionPrice
    return inscriptionPrice;
}
        
function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together  getCakeSizePrice() +
    var cakePrice = getFillingPrice() + candlesPrice() + insciptionPrice();
    
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
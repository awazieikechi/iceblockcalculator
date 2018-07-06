
<!DOCTYPE html>
<html>
<body >
<form method="POST" action="">
<h3 style="color:"> I will be using Ice in drinks:</h3>

<p style="color:"> Enter the number of Guests Expected <input name="guests" type="text" size="9px"> </p><br/>

<p style="color:"> Select the type of Event</p>

<input name="event" type="radio" value="outdoorevent" /><span style=" color:">Out door Events &nbsp; &nbsp; </span><input name="event" type="radio" value="servicerestaurant" /> <span style=" color:">Full Service Restaurant</span> <br/><br/>

<input name="event" type="radio" value="cocktailclub" /><span style=" color:">Cock tail Bar/ Club &nbsp; &nbsp; </span><input name="event" type="radio" value="fastfood" /><span style=" color:"> Fast food Restaurant</span><br/><br/><br/>

<input name="calculate" type="submit" value="Calculate" /><br/><br/><br/>

</form>

</body>
</html>

<?php
$icecalculator = null;

if (isset ($_POST['calculate']))

{
$guests = $_POST['guests'];

if ( $_POST['event']== "outdoorevent") {
	$icecalculator = $guests * 1.5;
}

if ( $_POST['event'] == "servicerestaurant") {
	$icecalculator = $guests * 1.2;
}

if ( $_POST['event'] == 'cocktailclub') {
	$icecalculator = $guests * 3.6;
}

if ( $_POST['event'] == 'fastfood') {
	$icecalculator = $guests * 1;
}
}

?>

<p> You will need approximately <input name="" type="text" value="<?php echo $icecalculator?>" size="5">  pounds of ice</p>
 
    
    
</body>
</html>
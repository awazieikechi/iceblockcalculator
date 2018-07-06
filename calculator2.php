
<!DOCTYPE html>
<html>
<body >
<form method="POST" action="">
<h3 style="color:#fff"> I will be using Ice for Cans/Bottles:</h3>

<p style="color:#fff"> Enter the number of Drink Cases You will use<br/><br/><br/>

<div id = "guest">Number of Starting cases <input name="starting" type="text" size="9px"> </div><br/><br/>

<div id = "guest">Number of Starting cases <input name="additional" type="text" size="9px"> </div><br/><br/>

<input name="calculate" type="submit" value="Calculate" /><br/><br/><br/>

</form>

</body>
</html>

<?php
$icecalculator1 = null;
if (isset ($_POST['calculate']))

{

$starting = $_POST['starting'];
$additional = $_POST['additional'];
$ans = $additional + $starting;
$icecalculator1 =$ans  * 15;
}

?>

<p> You will need approximately <input name="" type="text" value="<?php echo $icecalculator1?>" size="5">  pounds of ice</p>
 
    
    
</body>
</html>
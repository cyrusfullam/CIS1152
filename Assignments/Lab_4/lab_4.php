<?php

/**
 * Lab 4, Form and Post Lab
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
 * @author YOUR_NAME <YOUR_EMAIL_ADDRESS@vtc.edu>
 * @since 20150120
 */

/**
 * Outputs to the console a truncated float.
 *
 * Takes in a floating point number and truncates in to two places of precision.
 * Then returns to the output to the console.
 *
 * @param $float_value
 */

define('GRAVITY', 9.8);

function truncatedFloat($float_value)
{
//$float_value = 100.06580;
$truncated_float = ((int) $float_value * 100) / 100; 
echo $truncated_float;
}

/**
 * @param $degrees_f
 */
function farenheit2Kelvin($degrees_f)
{
$kelvin = ($degrees_f + 459.67)× 5/9;
}

/**
 * @param $area
 */
function dodecahedronVolume($area)
{
$area = 516.1432202;
$sideLength = sqrt(($area/(3*sqrt(25+10*sqrt(5)))));
$volume = (15+7*sqrt(5))/4*Pow($sideLength,3);
echo $volume;

}




/**
 * @param $height
 */
function impactVelocity($height)
{
sqrt((initialspeed * initialspeed)+($height *2)(9.8 ^2));
}


}


 ?> 
<?php 

if ($_SERVER("REQUEST_METHOD") == "POST"){
$floatingPoint = echo ($_POST ['floatingPoint']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Class 4 Lab</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
enter a float value for a truncated float:
<br>
<input type="number" step="any" name="floatingPoint">
<br>
<input type="submit" name="submit" value="submit">

</form>
</body>
</html>

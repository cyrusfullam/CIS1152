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
$header = <<< EOD
<html>
<head>
<title> simple php form example</title>
</head>
<body>
EOD;

$form_layout = <<<EOD
<p>
<form method="post" action="">
<label name="truncateFloat">floating point value</label><input type="text" name="truncateFloat"><br>
<label name="farenheit2Kelvin">farenheit value</label><input type="text" name="farenheit2Kelvin"><br>
<label name="dodecahedronVolume">Dodecahedron side value</label> <input type="text" name="dodecahedronVolume"><br>
<label name="impactVelocity">height of fall value</label><input type="text" name="impactVelocity"><br>
<input type="submit" value="submit" name="submit">
</form>
<p>
EOD;

function truncatedFloat($float_value)
{

return((int) $float_value * 100) / 100; 

}

/**
 * @param $degrees_f
 */
function farenheit2Kelvin($degrees_f)
{
return ($degrees_f -32)× 5/9+273.15;
}

/**
 * @param $area
 */
function dodecahedronVolume($area)
{
return pow($area, 3) / 4 * (15 + 7 * sqrt(5));
}




/**
 * @param $height
 */
function impactVelocity($height)
{
return sqrt(2* GRAVITY * $height);
}


}
}
if(!isset($_POST['submit'])){
	$truncateFloatResult = truncateFloat($_POST["truncateFloat"]);
	$farenheit2KelvinResult = farenheit2Kelvin($_POST["farenheit2Kelvin"]);
	$dodecahedronVolumeResult = dodecahedronVolume($_POST["dodecahedronVolume"]);
	$impactVelocityResult = impactVelocity($_POST["impactVelocity"]);
}else{
	$truncateFloatResult = "";
	$farenheit2KelvinResult = "";
	$dodecahedronVolume = "";
	$impactVelocityResult = "";

}
if(!isset($_POST['submit'])){
	//display the form
	echo $form_layout;
}else{
	$form_results = $header;
	if(!empty($truncateFloatResult)){
		$form_results .= "The Kelvin value is: " . $farenheit2KelvinResult . ".<.br>";
	}
	if(!empty($farenheit2KelvinResult)){
		$form_results .= "the kelvin value is: " . $dodecahedronVolumeResult . "<.br>";
	}
	if(!empty($dodecehedronVolumeResult)){
		$form_results .= "the splat value is: " . $impactVelocityResult . "<.br>";
	}
	if(!empty($impactVelocityResult)){
		$form_results .= "the splat value is: " . $impactVelocityResult . "<.br>";
	}
	$form_results .= $footer;
	echo $form_results;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Class 4 Lab</title>
</head>
<body>

</body>
</html>

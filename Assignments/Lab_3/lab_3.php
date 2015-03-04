<?php

/**
 * @param $temp_in_c
 */
 $temp_in_c = 100;
function tempWarning($temp_in_c)
{
    // Use an if else statement
	if($temp_in_c > 32){
    // Output the following text if the temp_in_c is above 32 degrees centigrade.

    echo "It's really hot out there, be careful!";
} 
    // Alternately output if the temp_in_c is below 7 degrees centigrade
	if else($temp_in_c < 7){
    echo "Brrrrr. Be sure to dress warmly.";
	}
}

/**
 * @param $a
 * @param $b
 * @param $c
 */
function quadraticEquation($a, $b, $c)
{
    // Use and if else statement

    $discrim = $b * $b - 4 * $a * $c;

    //if the discrim is less than zero echo the following
	if($discrim < 0){
    echo "The equation has no real roots!";
}
    // if the discrim equals zero do the following
	if else($discrim = 0){
    $root = -$b / (2 * a);
    echo "There is a double root at " . $root;
}
    // if the discrim is greater than zero do the following
	else if($discrim = > 0){
    $discRoot = sqrt($b * $b - 4 * $a * $c);
    $root1    = (-$b + $discRoot) / (2 * $a);
    $root2    = (-$b - $discRoot) / (2 * $a);
    echo "The solutions are: " . $root1 . "and " . $root2;
}
}
/**
 * Lab 4, Form and Post Lab
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
 * @author YOUR_NAME <cmf08270@vtc.edu>
 * @since 20150120
 */

/**
 * @param $letter
 */
function consinantOrVowel($letter)
{
    // Use a switch statement here
  switch ($letter) {
  case "a" || "e" || "i" || "o" || "u":
    echo $letter . " is a vowel";
		break;
  case "b" || "c" || "d" || "f" || "g" || "h" || "J" || "k" || "l" || "m" || "n" || "p" || "q" || "r" || "s" || "t" || "v" || "w" || "x" || "y" || "z":
    echo $letter . " is a consonant";
		break;
   default:
    echo $letter . " is not a vowel or a consonant";
}
}

/**
 * @param $number
 */
function oddOrEven($number)
{
	if($number % 2 == 0){
	echo "this number is even";
    // Use the modulus and ternary operator to echo whether the number is odd or even
	}else{
	echo "the number is odd";
}
}
function countByThree()
{
    // Create a for loop that counts by threes to ninety-nine and outputs every increment from 3 up to and including ninety-nine
	for($counter = 3; $counter <= 99;$counter += 3){
	
	echo  "$counter \n";
	}
}

/**
 * @param $count
 */
function indefiniteFactorialLoop($count)
{	
		$counter = $count-2;
		$factorial_product = $count * ($count-1);
		 // write a loop that starts at 0 and calculates the factorial to to and including the value of count
	while($counter > 0){
		$factorial_product = $factorial_product * ($counter);
			$counter--;	
		}
	
	   echo "The factorial is " . $factorial_product;
	}

}
?>
<?php
// Insert function calls below.
tempWarning(20);
quadraticEquation(1, 2, 6);
consinantOrVowel(a);
oddOrEven(34);
countByThree();
indefiniteFactorialLoop(10);
?>
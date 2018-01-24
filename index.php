<?php

/**
** Project Name: My Custom Array Function with foreach loop
** Project Creator: MD: Alamin
** Contact Email: mdalamin65na@gmail.com
**/

echo '<h1>My Custom Array Function</h1>';

// My Custom Array
$my_array = array('Alamin' =>"209534" , "Enamul"=>"209556","Nahid"=>"209563", "Tarun"=>"209581", "Sizan"=>"283192");

$n =0;

// Start foreach loop
foreach ($my_array as $key => $value) {
	// for serial number
	$n++;
	echo $n.") ";

	// For display Name & Roll
	echo $key." Roll is ".$value;

	// for line brack
	echo "<br>";

} // end foreach loop




?>
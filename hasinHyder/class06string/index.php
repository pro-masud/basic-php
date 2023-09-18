<?php 
$name = "Masud Rana";
// 
// $strint = <<<"EOD"
// my name is $name. this my name
// EOD;

// echo $strint;

$symble = 128;

// for($i = 0; $i < $symble; $i++){
//     echo chr("$i"); 
//     echo "<br>";
// }

// for($i = 0; $i < $symble; $i++){
//     echo ord("$i"); 
//     echo "<br>";
// }





// substr

$string = "Hello World";

$stringTwo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus consequuntur.";



// echo substr($string, 4, 3);

// echo strlen($string);  // output result is: 11
// echo str_word_count($string);    // output result is: 2 words here now
// echo strrev($string);       // outpur result is: dlroW olleH

// echo str_replace("World", "Masud", $string);   // output result is: Hello Masud

$strTok = preg_split("/ /", $stringTwo);

print_r($strTok);


?>


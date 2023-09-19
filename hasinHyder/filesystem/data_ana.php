<?php 

$filePath = "C:/xampp/htdocs/basic-php/hasinHyder/filesystem/textfour.txt";

$students = [
    [
        "fname" => "Masud",
        "lname" => "Rana",
        "age"   => 18,
        "class" => 12,
        "roll"  => 001,
    ],
    [
        "fname" => "Al Amin",
        "lname" => "Islam",
        "age"   => 25,
        "class" => "BBA",
        "roll"  => 002,
    ],
    [
        "fname" => "Fatima",
        "lname" => "Khatun",
        "age"   => 18,
        "class" => 12,
        "roll"  => 003,
    ],
    [
        "fname" => "Parvej",
        "lname" => "Islam",
        "age"   => 18,
        "class" => 12,
        "roll"  => 004,
    ],
    [
        "fname" => "Monuar",
        "lname" => "Rahman",
        "age"   => 18,
        "class" => 12,
        "roll"  => 006,
    ],
];

// $fOpen = fopen($filePath, "w");

// foreach($students as $student){
//     $data = sprintf("%s, %s, %s, %s, %s \n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
//     file_put_contents($filePath, $data, FILE_APPEND | LOCK_EX);
// }

// fclose($fOpen);


// data read to file patha
$fOpen = fopen($filePath, 'r');
while($data = fgets($fOpen)){
    $student = explode(",", $data);
    printf("Name: %s %s\nAge: %sClass: %s\nRoll: %s\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
}
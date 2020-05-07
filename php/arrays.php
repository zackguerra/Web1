<?php 
// Indexed arrays
// using camelCase
// PascalCase
$peopleOne = ['tom', 'candy', 'john'];
// echo $peopleOne[1];
$peopleTwo = array('ken', 'charlie');
// echo $peopleTwo[0];

$ages = [20, 30, 40, 50];
// echo $ages;
// change an element in an array
$ages[1] = 25;
// add a new value at the end
$ages[] = 60;

// another way to add value at the end using push function
array_push($ages, 70);
// print_r($ages);
// echo count($ages);
// merge array function
$peopleThree = array_merge($peopleOne, $peopleTwo);
// echo $peopleThree;
// print readable
// print_r($peopleThree);

// associative arrays
$combinedPairs = ['john'=>'black', 'kevin'=>'orange', 'kelly'=>'brown'];
// echo $combinedPairs['john'];

// another way to create associative array
$combinedPairs1 = array('sandy'=>'purple', 'bibiana'=>'yellow');

// print_r($combinedPairs1);

// Adding a new key and value
$combinedPairs1['george'] = 'green';
print_r($combinedPairs1);
?>
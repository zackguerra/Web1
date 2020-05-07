<?php 
// Multi-dimensional array
$movies = [
['money heist', 'spain', 'netflix', 1],
['lost in space', 'usa', 'netflix', 3],
['gravity', 'usa', 'netflix', 10]
];

// print_r($movies[1][0]);

// Associative array
$movies1 = [
['title'=>'money heist', 'country'=>'spain', 'maker'=>'netflix', 'rank'=> 1],
['title'=>'lost in space', 'country'=>'usa', 'maker'=>'netflix', 'rank'=> 3],
['title'=>'gravity', 'country'=>'usa', 'maker'=>'netflix', 'rank'=> 10]
];

// echo $movies1[0]['country'];

// echo count($movies1);

// Add more data
$movies1[] = ['title'=>'Benhur', 'country'=>'usa', 'maker'=>'camera 65', 'rank'=> 1];
// popping an element
$popped = array_pop($movies1);
print_r($movies1);
?>
<?php
// functions

// 1. Define a function
// 2. Call the function 
// function sayHello($name){
//     echo "Good morning $name";
// }
// // argument
// sayHello('Jungeun Kim')

// function, but doesn't have argument, but shows default argument
// function sayHello($name = 'Josh', $time = 'morning'){
//     // echo "Good Morning $name";
//     echo "Good $time, $name";
// }
// sayHello('Kelly', 'night');

// We need to wrap with {} when we have variable with key that expects value
// $product = ['name'=>"chocolate", 'price'=> 35];
function formatProduct($product){
    echo "{$product['name']} costs \${$product['price']} to buy<br>";
}
// formatProduct(['name'=> 'coke', 'price'=> 2.50]);
$formatted = formatProduct(['name'=>'pasta', 'price'=>20]);

?>
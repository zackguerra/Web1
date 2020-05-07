<?php
// variable scope

// local variable
// function myFunction(){
//     $price = 10;
//     local varible only exists inside function
//     echo $price;
// }
// myFunction();
// echo $price;


// function myAge($age){
//     echo $age;
// }
// myAge(18);


// global variable
// $name = "Autumn Fall";

// function sayHello(){
    // make the variable to global
//     global $name;

//     $name = 'Sandy';
//     $name = 'Ion';
//     echo "Hello, $name";
// }

// sayHello();
// echo $name;


// another way to make this variable global
function sayBye(&$name){
    $name = "Bill";
    echo "bye $name";
}

sayBye($name);
echo $name;

?>
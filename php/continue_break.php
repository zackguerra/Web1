<?php 

$products = [
    ['name'=>'chocolate cake', 'price'=>20],
    ['name'=>'muffin', 'price'=>10],
    ['name'=>'croissant', 'price'=>15],
    ['name'=>'jelly', 'price'=>5],
    ['name'=>'ice cream', 'price'=>40],
    ['name'=>'gum', 'price'=>2]
];

foreach($products as $product){
    // if($product['name'] === 'ice cream'){
    // break;
    // }
    if($product['price'] > 15){
        continue;
    }

    echo $product['name'] . '<br>';
}




?>
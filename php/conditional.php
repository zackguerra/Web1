<?php
// conditional statement
// $price = 20;
// if($price < 10){
//     echo 'condition is met';
// } elseif ($price < 30){
//     echo 'elseif condition is met';
// }else{
//     echo 'condition is not met';
// }

$products = [
    ['name'=>'chocolate cake', 'price'=>20],
    ['name'=>'muffin', 'price'=>10],
    ['name'=>'croissant', 'price'=>15],
    ['name'=>'jelly', 'price'=>5],
    ['name'=>'ice cream', 'price'=>40],
    ['name'=>'gum', 'price'=>2]
];
// foreach($products as $product){
//     if($product['price'] < 15 && $product['price'] > 2){
//         echo $product['name'] . '<br>';
//     }
// }

// foreach($products as $product){
// if($product['price'] > 20 || $product['price'] < 10) {
//     echo $product['name'] . '<br>';
// }
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <ul>
    <?php 
    foreach($products as $product){?>
    <?php if($product['price']>15){ ?>
        <li>
            <?php echo $product['name']; ?>
        </li>
    <?php } ?>
    <?php } ?>

    
   
    
    </ul>
    </div>
</body>
</html>
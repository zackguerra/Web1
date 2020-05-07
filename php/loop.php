<?php 
// loops
$names = ['john', 'bill', 'steve'];
// for($i = 0; $i < count($names); $i++){
//     echo $names[$i] . '<br>';
// }

// foreach($names as $name){
//     echo $name . '<br>';
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
//     echo $product['name'] . ' - ' . $product['price'] . '<br>';
// }

// $i = 0;
// while($i < count($products)){
//     echo $products[$i]['name'];
//     echo '<br>';
//     $i++;
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
    <!-- putting for each loop inside html element -->

    <h1>Products</h1>
    <ul>
    <?php 
    
    foreach($products as $product){ ?>
        <li><?php echo $product['name']; ?></li>
        <p>$ <?php echo $product['price']; ?></p>
    
    <?php }?>
    </ul>
</body>
</html>
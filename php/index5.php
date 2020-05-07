<?php 
$firstName = 'Steve';
$lastName = 'Jobs';

$hello = 'Hey, my name is ' . $firstName . $lastName;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <!-- Single quote and double quote difference for PHP -->
   <?php echo $firstName . $lastName; 
   echo "My name is  $firstName";
   
   ?>
  

   
   <br> <?php echo $hello; 
   echo "They told me \"Wow. \"" ;
   echo $firstName[0];

   echo strlen($firstName);
   echo strtoupper($firstName);
   echo str_replace('e', 'o', $firstName);
   
   ?>
    </h1>


</body>
</html>
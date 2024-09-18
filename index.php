<?php 
    //declaring a variable
    $name = "Maria Fernanda";
    $food = "pizza";
    $email = "maria@gmail.com";

    $age = 21;
    $year = date("Y");
    $price = 15.20;

    $employed = true;

    //output
    echo "Hello {$name}";
    echo "<br> You like {$food}";
    echo "<br> Your email is {$email}";
    echo "<br> Your age is {$age}";
    echo "<br> The year is {$year}";
    echo "<br> The price of the pizza is \${$price}";
    if($employed=true){
        echo"<br>You are employed!";
    }

    $total = null;
    $total = 3 * 2;
    echo"<br>3 x 2 = {$total}";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>x:</label><br>
        <input type="text" name="x"><br>
        <input type="submit" name="total"><br>
        
    </form>
   
</body>
</html>

<?php
    $x = $_POST["x"];
    $total = null;

    //absolute number
    //$total = abs($x);

    //arredondar numero ex: 3.99 -> 4
    $total = round($x);


    echo $total;


?>
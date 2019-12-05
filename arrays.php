<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $numberArray = array(1, 2, 3, 4, 5, 6);
    
    
    forEach($numberArray as $value) {
        if ($value%2) {
            echo "\n number " . $value . " is odd \n";
        } else {
            echo "\n value " . $value . " is even \n";
        }
    }

    ?> 
</body>
</html>
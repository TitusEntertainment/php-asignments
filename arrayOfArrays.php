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
    
    $owo = array(array("Hello"), array("World"));


    $arrayList = array(array(2, 2), array(1, 4));

    echo $owo[0][0] .  $owo[1][0];
    function reverseArray($array) {
        $array = array_reverse($array);
        echo "\n" . $array[0][1]. "\n";
    }

    reverseArray($arrayList);

    ?>
</body>
</html>
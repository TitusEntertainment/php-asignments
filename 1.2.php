<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1.2 | Eddie Englund</title>
</head>
<body>
    <?php 
    
    $katet1 = 8;
    $katet2 = 16;

    function calc($var1, $var2) {
        $plus1 = $var1 ** 2;
        $plus2 = $var2 ** 2;
        $rot = ($plus1 + $plus2) ** 0.5;
        return $rot;
    }

    // The hypot way
    echo "<h1>". hypot($katet1, $katet2) . "<h1/>";

    //the other way

    echo "<h1>". calc($katet1, $katet2) . "<h1>";

    ?>
</body>
</html>
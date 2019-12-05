<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1.3</title>
</head>
<body>
    
    <?php 
    
    $hastighet = 47;

    if ($hastighet < 6) {
        echo "<h1>". "Långsamt". "<h1/>";
    } elseif ($hastiget >= 6) {
        echo "<h1>". "Lagom". "<h1/>";
    } elseif ($hastiget >= 20) {
        echo "<h1>". "Snabbt". "<h1/>";

    } elseif ($hastiget <= 46) {
        echo "<h1>". "Mycket snabbt". "<h1/>";

    }
    
    ?>
</body>
</html>
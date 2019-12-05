<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eddie Engund 1.1</title>
</head>
<body>
    
    <?php 

    
          
        $txt = "WoW"; 
        // reversa string
        $textRevered = strrev($txt);


        // kolla ifall dom är det samma.
        if ($txt === $textRevered) {
            echo "<h1>". "yes". "</h1>";
        } else {
            echo "<h1>". "no". "</h1>";
        }
        
    ?>

</body>
</html>
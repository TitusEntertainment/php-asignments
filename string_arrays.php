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
    
    $filterArray = array("hej", "du", "va");
    $textArray = array("Hejsan svenjsan", "du, va håller du på med?", "hej vad gör du");

    foreach($textArray as $text) {
        echo $text;
    }


    ?> 
</body>
</html>
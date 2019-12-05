<!DOCTYPE html>
<html>
<body>




<?php 

    // Deklarera age
    $age = 65;

    // kolla om age är större en 64 så kommer den att svara med du kan gå i pension om inte så svarar den hell nah man you're to young
    if ($age > 64) {
        echo "Du kan gå i pension";
    } else {
        echo "Hell nah man you're to young";
    }
    

    // medans x är mindre en 5 så echoar den det nuvarnde numret och lägger till 1 tills den blir 5
    $x = 1;

    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }

    // Declarerar en function som endast echoar "Hello World" och efter det så kallar jag dem

    function helloWorld() {
        echo "Hello World!";
    }

    helloWorld();

    // Denna funktion tar emot en variable som callas for $owo och om den variabeln är lika med owo eller OwO så svarar funktionen med owO om inte så svarar den med not cool man, och självklart så kallar jag den efteråt

    function OwO($owo) {
        if ($owo == "owo" || $owo == "OwO") {
            echo "owO.<br>";
        } else {
            echo "not cool man.<br>";
        }
    }

    OwO('OwO');    
?> 

</body>
</html> 
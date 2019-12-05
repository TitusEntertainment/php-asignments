<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!-- The following code tests the password verification if false it returns a error otherwise it returns a welcome message-->
    <?php     
        if ($_POST["password"] !== $_POST["verify-password"]) {
            echo "Passwords do not match, please try again!";
        } else {
            echo "Welcomo" . $_POST["Username"] . "<br>" . "Your email address is: ". $_POST["email"] . " I'd like to display your password but that'd be stuupid";
        }
    ?>

</body>
</html>
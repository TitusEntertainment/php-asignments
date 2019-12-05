<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<!--This is the form where the user can put in what the hell they even are, username, email and password + verifying it. -->
<form action="forms.php" method="post">
    Username: <input type="text" name="Username" required><br>
    E-Mail: <input type="email" name="email"><br>
    Password: <input type="password" name="password" required><br>
    Verify Password: <input type="password" name="verify-password" required><br>
    Whatevenareyou:
    <input type="radio" name="whateven" value="pope">Pope
    <input type="radio" name="whateven" value="gamer">Gamer
    <input type="radio" name="whateven" value="boomer">Boomer
    <input type="radio" name="whateven" value="other">Other<br>
    <input type="submit" value="Submit" name="submit">
</form>

    <!-- The following code tests the password verification if false it returns a error otherwise it returns a welcome message-->
    <?php   
        if($_POST['submit']) {
            
            
        if ($_POST["password"] !== $_POST["verify-password"]) {
            echo "<h1>". "Passwords do not match, please try again!" . "</h1>";
        } else {
            echo "Welcomo" . $_POST["Username"] . "<br>" . "Your email address is: ". $_POST["email"] . " I'd like to display your password but that'd be stuupid";
        }
    }
    ?>



</body>
</html>
<?php
session_start();


if(isset($_SESSION['Username']) && isset($_SESSION['Password'])) {
    if ($_SESSION['Username'] =="Plop" && $_SESSION['Password'] == "1234" )
        header("Location: index.php");
}
if (isset($_POST['Username']) ){
    if ($_POST["Username"] == "Plop" && $_POST["Password"] == "1234"){
        $_SESSION["Username"] = "Plop";
        $_SESSION["Password"] = "1234";
        header("Location: index.php");
    }
    else{
        echo "Wrong Username or Password";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tp</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<form action="login.php" method="post">
    Username : <input name="Username" type="text">
    Password : <input name="Password" type="password">
    <input name="Remember" type="checkbox" >Remember me
    <input name="Login" type="submit" value="Login">
</form>

</body>
</html>
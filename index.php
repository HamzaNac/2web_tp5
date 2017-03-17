<?php
session_start();

 if(isset($_SESSION['Username']) && isset($_SESSION['Password'])) {
        if ($_SESSION['Username'] !="Plop" || $_SESSION['Password'] != "1234" )
            header("Location: login.php");
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

<h1>Al-Bhed translator</h1>
<p>Mot à traduire : <input id="trans" type="text" name='trad' /></p>
<div id="div"></div>
<a href="logout.php">Logout</a>

<script>
    $(document).ready(function(){
        $("#trans").keyup(function(){
            $.ajax({
                type:'POST',
                url :'translator.php',
                data : {val :this.value}

            })
                .done(function( msg ) {
                   document.getElementById("div").innerHTML = msg;
                });
        });
    });
</script>

</body>
</html>
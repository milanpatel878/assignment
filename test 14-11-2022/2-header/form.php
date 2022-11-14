<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
<?php
        if(isset($_POST["sub"]))
        {
           echo "wait 4 second"; 
           header('refresh:4,welcome.php');
        }  
 ?>

    <form method="post">
        <center>
        <input type="submit" name="sub" value="login">
        </center>
</body>
</html>
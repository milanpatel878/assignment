<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>session</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
         if(isset($_POST['sub']))
         {
                         
             $nm=$_POST['nm'];
             $pass=$_POST['pass'];
             if($nm=='milan'&&$pass='878')
             {
                 session_start();
 
                 $_SESSION['nm']=$_POST['nm'];
                 header('location:welcome.php');
             }
             else
             {
                 echo "your username or password checked";
             }
         }

    ?>

    <form method="post">
        <center>
        <input type="text" name="nm" placeholder="enter user name"> <br><br>
        <input type="text" name="pass" placeholder="enter password"><br><br>
        <input type="submit" name="sub" value="login">
        </center>
</body>
</html>
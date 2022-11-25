<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>find thursday</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <form method="post">
        <input type="month" name="day">
        <input type="submit" name="sub" value="Submit Month">
    </form>
    
 <?php   
    if(isset($_POST['sub']))
    {
        $da=$_POST['day'];
        
        if($da!='')
        {
            echo "<h1>$da</h1><br>";
            
        }
        else
        {
            echo "<h3>Plese Select Month</h3>";
        }        
    }     
    ?>
</body>
</html>
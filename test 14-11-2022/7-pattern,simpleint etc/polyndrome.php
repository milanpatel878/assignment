<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>polyndrome</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

     <?php
        if(isset($_POST['ans']))
        {
            $no=$_POST['no'];
            $rv=strrev($no);
            if($no==$rv)
            {
                echo "Number is palindrome ".$no;
            }
            else
            {
                echo "Number is not palindrome ".$no;
            }
        }
    ?>

   <form method="post">
        <input type="text" name="no" placeholder="Enter number">
        <input type="submit" name="ans" value="answer">
    </form>
    
</body>
</html>
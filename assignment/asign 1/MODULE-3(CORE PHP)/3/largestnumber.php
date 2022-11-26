<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>largest number</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body align="center">
    <h1>Find Largest Number</h1>
    <form method="post">
        <input type="text" name="a" placeholder="Enter number "><br><br>
        <input type="text" name="b" placeholder="Enter number "><br><br>
        <input type="text" name="c" placeholder="Enter number "><br><br>
        <input type="submit" name="che" value="check largest number"><br><br>
    </form>

    <?php
    if(isset($_POST['che']))
    {
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];

        echo "Number is : ".$a."<br>";
        echo "Number is : ".$b."<br>";
        echo "Number is : ".$c."<br><br>";
        $result = ($a > $b && $a > $c) ? ("The Largest Number is : ".$a) : (($b > $c) ? ("The Largest Number is : ".$b) : ("The Largest Number is : ".$c));
        echo $result;
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>result</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
<center>
        <form method="post">
            <h1>STUDENT'S RESULT</h1>
            Physics:<input type="text" name="Phy" placeholder="Enter your Marks "><br><br>
            Chemistry:<input type="text" name="Chem" placeholder="Enter your Marks "><br><br>
            Biology:<input type="text" name="Bio" placeholder="Enter your Marks "><br><br>
            Mathematics:<input type="text" name="Math" placeholder="Enter your Marks "><br><br>
            Computer:<input type="text" name="Comp" placeholder="Enter your Marks "><br><br>
            <input type="submit" name="btn" value="Result"> <br><br>
        </form>
</center>
<center>
<?php
    if(isset($_POST["btn"]))
    {
        $phy=$_POST["Phy"];
        $che=$_POST["Chem"];
        $bio=$_POST["Bio"];
        $mat=$_POST["Math"];
        $com=$_POST["Comp"];
        if($phy<'100' && $che<'100' && $bio<'100' && $mat<'100' && $com<'100')
        {
            if($phy>=33 && $che>=33 && $bio>=33 && $mat>=33 && $com>=33)
            {
                $total=$phy+$che+$bio+$mat+$com;
                $pr=$total/5;
                echo 'Your Result <br><br>'.'Physics : '.$phy.'</br>'
                .'Chemistry : '.$che.'</br>'
                .'Biology : '.$bio.'</br>'
                .'Mathematics : '.$mat.'</br>'
                .'Computer : '.$com.'</br></br>'
                .'Total Marks : '.$total.'</br><br>'
                .'PR is : '.$pr.'</br></br>' ;

                if($pr>=90)
                {
                    echo "Grade A";
                }
                else if($pr>=80 && $pr<90)
                {
                    echo "Grade B";
                }
                else if($pr>=70 && $pr<80)
                {
                    echo "Grade C";
                }
                else if($pr>=60 && $pr<70)
                {
                    echo "Grade D";
                }   
                else if($pr>=35 && $pr<60)
                {
                    echo "Grade E";
                }
                else
                {
                    echo "<h1 align='center'>You Are Fail</h1>";
                }
        }
        else
        {
            echo 'Sorry You Are Failed Beter Luck Next Time </br>';
        }
    }
    else
    {
        echo "Plese Enter your Marks Under 100";
    }
    }
 
    ?>
</center>
</body>
</html>
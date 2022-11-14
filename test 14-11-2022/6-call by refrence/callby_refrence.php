<h1> Call_by_refrence</h1>

<?php
function fm(&$fname)
{
    echo "MY NAME : MILAN"."<br>";
}
fm($fname);

$sname="SURNAME : GONDALIYA";
echo $sname;

?>
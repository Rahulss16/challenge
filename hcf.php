<html>
<head>
    <title>Hcf</title>
</head>
<body>
<form name="frm" method="post" action="">

    Number1:<input type="text" name="number1" placeholder="Enter number first" /></br>

    Number2:<input type="text" name="number2" placeholder="Enter number second" /></br>

    <input type="submit" name="submit" value="submit" />
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))

{

    $num1=$_POST['number1'];

    $num2=$_POST['number2'];

    function hcf($i1,$i2)

    {
        if($i2!=0)
        {
            return hcf($i2,$i1%$i2);
        }
        else
        {
            return $i1;
        }
    }
    $hcfofnumber=hcf($num1,$num2);

}
if(isset($_POST['submit']))
{
   echo "<br>";
    echo "HCF of $num1 and $num2 is:- ".$hcfofnumber; }
?>

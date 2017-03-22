<html>
<head>
    <title>Find Largest & Smallest numbers in an Array </title>
</head>
<body>

<h3>Find Maximum & Minimum number in a Array</h3>
<br /><br />
<form method="post">
    <input type="text" name="numbers" placeholder="Enter Element of Array"/>
    <button type="submit">Check</button>
</form>
</body>
</html>

<?php

if($_POST)
{
    $numbers = $_POST['numbers'];

    $numArray = explode(',', $numbers);

    $maximum  = $numArray[0];
    $minimum = $numArray[0];

    foreach($numArray as $num){


        if($num > $maximum){
            $maximum = $num;
        }
        else if($num < $minimum){
            $minimum = $num;
        }

    }
    echo "$numbers <br/>";
    echo "Maximum Number is: $maximum <br />";
    echo "Minimum Number is: $minimum";

}
?>
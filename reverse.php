<html>
    <head>
        <title>Find Reverse number of input data or number</title>
    </head>
        <body>
        <h1>Reverse number</h1>
        <form action="" method="post">
            <input type="text" name="number" placeholder="Enter the Numbers"/>
            <button type="submit">Check</button>
        </form>
        </body>
</html>
<?php

    $number = $_POST['number'];
    $reverse = '';
    while ($number > 1)
    {
        $rem = $number % 10;
        $reverse = ($reverse * 10) + $rem;
        $number = ($number / 10);
    }

    echo "Reverse Number of $number is : $reverse";

?>
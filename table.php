<html>
    <body>
    <h2>Table</h2>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter the number of Table"/>
        <input type="submit" value="submit" name="submit" />
    </form>
    </body>
</html>
<?php
    if ($_POST) {
        $number = $_POST['number'];
        define('NUM', $number);
        if (!is_numeric($number)) {
            echo "Input should be a number";
            return;
        } else {
            echo "Table of $number is<br>";
            for ($i = 1; $i <= 10; $i++) {
                echo $i * NUM;
                echo '<br>';
            }
        }
    }
?>
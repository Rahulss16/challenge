<html>
<body>
	<h2>Enter the year to find leap year is not:-</h2>
	<form action="" method="post">
		<input type="text" name="year" />
		<input type="submit" value="submit" name="submit" >
	</form>
</body>
</html>

<?php

	if( $_POST )
    {
        $year = $_POST[ 'year' ];

        if(!is_numeric($year))
        {
            echo "Strings not allowed, Input should be a number";
            return;
        }

        if( (0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400) )
        {
            echo "$year is a leap year";
        }
        else
        {
            echo "$year is not a leap year";
        }

    }

?>

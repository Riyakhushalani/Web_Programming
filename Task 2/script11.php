<html>
<body>
<form action="script11.php" method="get">
Enter A:<input type="text" name="value" />
<br>
submit:<input type="submit" />
</form>
</body>
</html>
<?php
$a=$_REQUEST['value'];
if( $a%2==0)
{
	echo "a is even";
}
else
{
	echo "a is odd";
}
?>
<html>
<body>
<form action="script10.php" method="get">
length:<input type="text" name="length" />
<br>
width:<input type="text" name="width" />
<br>
submit:<input type="submit" />
</form>
</body>
</html>
<?php
$l=$_REQUEST['length'];
$w=$_REQUEST['width'];
$area=$l*$w;
echo "The aea of rectangle ".$area;
?>
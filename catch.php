<?php
$nm=$_GET['my_name'];
$lm=$_GET['last_name'];
$city=$_GET['city'];
$add=$_GET['add'];
$pin=$_GET['pin'];
$mno=$_GET['mob'];
$state=$_GET['state'];
$con=$_GET['country'];
$sub=$_GET['sub'];
echo "<table border=1 bgcolor=#D7BDD align=center>
<tr> <center> Form </center>
<tr><td> FIRST NAME:</td><td>$nm</td></tr>
<tr><td> LAST NAME:</td><td>$lm</td></tr>
<tr><td> CITY:</td><td>$city</td></tr>
<tr><td> ADDRESS:</td><td>$add</td></tr>
<tr><td> PINCODE:</td><td>$pin</td></tr>
<tr><td> MOBILENO:</td><td>$mno</td></tr>
<tr><td> STATE:</td><td>$state</td></tr>
<tr><td> COUNTRY:</td><td>$con</td></tr>
</table>"
?>

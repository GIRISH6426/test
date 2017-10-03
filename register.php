<?php
error_reporting(0);
include 'config.php';
if(isset($_GET['id'])){
$result=select_user_data($_GET['id']);

$id=$_GET['id'];

}


?>
<DOCTYPE html>
<head>
<title>REGISTRATION FORM</title>
</head>
<body>
<form action="userlist.php" method="POST">
<table border="1" width="500" height="400" align="center">
<tr>
<td colspan="5" align="center" bgcolor="#FF6699">INFORMATION</td>
</tr>
<tr>
<td align="center" bgcolor="#999999">NAME</td>
<td align="center" bgcolor="#CCCCCC"><input type="text" name="username" value="<?php echo $result['username']?>" /></td></tr>
 
<tr>
<td align="center" bgcolor="#999999">ADDRESS</td>
<td align="center" bgcolor="#CCCCCC"><input type="text" name="address"  value="" size="30"/></td>
</tr>



<tr>
<td align="center" bgcolor="#999999">MOBILE</td>
<td align="center" bgcolor="#CCCCCC"><input type="text" name="mobileno" value="" size="30"/></td>
</tr>


<tr>
<td align="center" bgcolor="#999999">EMAIL</td>
<td align="center" bgcolor="#CCCCCC"><input type="text" name="emailid" value="" size="30"/></td></tr>

<tr>
<td align="center" bgcolor="#999999">COMPANY NAME</td>
<td align="center" bgcolor="#CCCCCC"><input type="text" name="companyname"  value="" size="30"/></td></tr>
<tr><TD> <input type="hidden" name="hf" value="$id"/></TD></TR>


<tr>
<td colspan="5" align="center" bgcolor="#9999FF"><input type="Submit" name="SUBMIT" value="SUBMIT"/></td>

</tr>


</table>
</form>
</body>
</html>

<?php
session_start();
if(isset($_POST['b3']))
{
$_SESSION['em']=$_POST['t4'];
$_SESSION['pass']=$_POST['t5'];
if(file_exists("info"."/".$_SESSION['em']))
{
echo '<font color="red" size="10">'."you are already registered!!!".'</font>';
//header('Location:index.php');
}
else
{
$_SESSION['name']=$_POST['t3'];
$_SESSION['em']=$_POST['t4'];
$_SESSION['pass']=$_POST['t5'];
$_SESSION['add']=$_POST['t6'];
mkdir("users"."/".$_SESSION['em']);
$arr=fopen("users"."/".$_SESSION['em']."/".$_SESSION['pass'],"w");
$data="ur name is:".$_SESSION['name']."    "."ur email is:".$_SESSION['em']."   "."ur password is:".$_SESSION['pass']."    "."ur address is:".$_SESSION['add'];
fwrite($arr,$data);
header('Location:welcome.php');
}
}
?>
<html>
<body bgcolor="pink">
<center>
<form method="post">
<table border="2" width="300" height="325" cellspacing="0" bgcolor="lavender">
<tr>
<td align="center" colspan="2">Registration form</td>
</tr>
<tr>
<td height="26" align="center">Name:</td>
<td align="center"><input type="text" name="t3" autofocus placeholder="enter ur name" required>(*)</td>
</tr>
<tr>
<td height="29" align="center">Email:</td>
<td align="center"><input type="email" name="t4"  placeholder="enter ur email" required>(*)</td>
</tr>
<tr>
<td height="33" align="center">Password:</td>
<td align="center"><input type="password" name="t5"  placeholder="enter ur password"></td>
</tr>
<tr>
<td height="167" align="center">Address:</td>
<td align="center"><textarea rows="5" cols="20" name="t6"></textarea></td>
</tr>
<tr>
<td height="28" colspan="2" align="center"><input type="submit" name="b3" value="submit"></td>
</tr>
</table>
</form>
</center>
</body>
</html>

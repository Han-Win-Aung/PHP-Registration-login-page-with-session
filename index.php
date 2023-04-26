<?php
session_start();
error_reporting(1);
if(isset($_POST['b1']))
{
$email=$_POST['t1'];
$password=$_POST['t2'];
if($email=="" || $password=="")
{
$err= '<font color="red" size="6">Please fill user name and pass first!!</font>';
}
else
{
	
	if(file_exists("users/$email") && file_exists("users/$email/$password"))
	{
	$_SESSION['em']=$email;
	header('location:account.php');
	}
	else
	{
	$err= '<font color="red" size="6">wrong user name or password</font>';
	}
}
}

?>

<html>
<body bgcolor="lime">
<center>
<form method="post">
<table border="2" width="300" height="174" cellspacing="0" bgcolor="orange">
<tr><td colspan="2"><?php echo $err; ?></td></tr>
<tr>
<td height="50" colspan="2" align="center">Login Page</td>
</tr>
<tr>
<td height="38" align="center">Email:</td>
<td align="center"><input type="email" name="t1" autofocus placeholder="enter ur email">
</tr>
<tr>
<td height="49" align="center">Password:</td>
<td align="center"><input type="password" name="t2" autofocus placeholder="enter ur password">
</tr>
<tr>
<td height="33" colspan="2" align="center"><input type="submit" name="b1" value="sign in"><a href="registration.php">New user ? Click here</a></td>
</tr>
</table>
</form>
</center>
</body>
</html>




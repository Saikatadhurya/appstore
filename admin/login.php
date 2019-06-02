<?php 
session_start();
if(isset($_SESSION['username']))
{
	header('Location:index.php');
}	

?>
<html>
<head>
<title>Admin Login</title>
</head>

<body>
<form method="post" action="login.php">
<table width="400" align="center" border="10" style="font-family:calibri">
<tr>
<td colspan="5" align="center" bgcolor="#CCCCCC">
<h2>Admin Login</h2>
</td>
</tr>
<tr>
<td>User Name</td>
<td><input type="text" name="username" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" /></td>
</tr>
<tr>
<td colspan="5" align="center"><input type="submit" name="login" value="Login"/></td>
</tr>
</table>
</form>
</body>
</html>
<?php
include('connect.php');
if(isset($_POST['login'])) 
{
	$user_name = $_POST['username'];
	$password = $_POST['password'];
	
	$login_query = "select * from admin where username = '$user_name' AND password = '$password'";
	$run = mysqli_query($db,$login_query);
	if(mysqli_num_rows($run)>0)
	{
		
		$_SESSION['username'] = $user_name;
		echo"<script>window.open('index.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('Username or Password is incorrect..')</script>";
	}
}
?>
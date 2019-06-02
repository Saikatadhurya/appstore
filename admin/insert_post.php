<!DOCTYPE html>
<head>
<title>Insert New Post</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<form action="insert_post.php" method="post" name="frm" enctype="multipart/form-data">
<table align="center" border="10" width="740">

<tr>
<td colspan="5" align="center" bgcolor="#FFCC66"><h1>Insert New App here</h1></td>
</tr>

<tr>
<td align="right">App Name :</td>
<td><input type="text" name="app_name" size="65" /></td>
</tr>
<tr>
<td align="right">Category :</td>
<td><input type="text" name="category" size="65" /></td>
</tr>

<tr>
<td align="right">sizepc :</td>
<td><input type="number" name="sizepc" size="65" /></td>
</tr>
<tr>
<td align="right">sizemob :</td>
<td><input type="number" name="sizemob" size="65" /></td>
</tr>
<tr>
<td align="right">app_version_pc	 :</td>
<td><input type="text" name="app_version_pc" size="65" /></td>
</tr>
<tr>
<td align="right">app_version_mob	 :</td>
<td><input type="text" name="app_version_mob" size="65" /></td>
</tr>
<tr>
<td align="right">rating :</td>
<td><input type="number" name="rating" size="65" /></td>
</tr>
<tr>
<td align="right">	keyword	 :</td>
<td><input type="text" name="keyword" size="65" /></td>
</tr>
<tr>
<td align="right">Post Image :</td>
<td><input type="file" name="image" size="65" /></td>
</tr>
<tr>
<td align="right">company:</td>
<td><input type="text" name="company" size="65" /></td>
</tr>
<tr>
<td align="right">description :</td>
<td><textarea name="description" cols="60" rows="10"></textarea></td>
</tr>

<tr>
<td colspan="3" align="center"><input type="submit" name="submit" value="Insert Post" /></td>
</tr>

</table>
</form>
</body>
</html>

<?php 

include("connect.php");
if(isset($_POST['submit']))
{
	if($_POST['app_name']=='' or $_POST['category']=='' or $_POST['company']=='')
	{
		echo("<script>alert('Fill All the Fields.')</script>");
		 echo"<script>window.open('index.php?insert=insert','_self')</script>";
		exit();
	}
	else
	{
		$app_name = $_POST['app_name'];
		$category = $_POST['category'];
		$sizepc = $_POST['sizepc'];
		$sizemob = $_POST['sizemob'];
		$app_version_pc = $_POST['app_version_pc'];
		$app_version_mob = $_POST['app_version_mob'];
		$rating = $_POST['rating'];
		$company = $_POST['company'];
		$keyword = $_POST['keyword'];
		$description = $_POST['description'];
		$image_name = $_FILES['image']['name'];
		$image_type = $_FILES['image']['type'];
		$image_size = $_FILES['image']['size'];
		$image_tmp = $_FILES['image']['tmp_name'];
		
	if($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="image/png" or $image_type=="image/gif")
	{
		if($image_size<=2000000)
		{
			move_uploaded_file($image_tmp,"../image/apps/$image_name");
			$query = "insert into application(app_name,category,image,sizepc,sizemob, app_version_pc,app_version_mob,rating, company,description,keyword) values('$app_name','$category','$image_name','$sizepc','$sizemob', '$app_version_pc','$app_version_mob','$rating','$company','$description','$keyword')";
		}
		else 
		{
			echo("<script>alert('Larger Image, Only 2MB file size is valid.')</script>");
		}
	}
	else
	{
			echo("<script>alert('Invalid File Type.')</script>");
	}

if(mysqli_query($db,$query))
{
	echo ("<script>alert('Post has been Submitted')</script>");
	echo"<script>window.open('index.php?insert=insert','_self')</script>";
}
else{ echo"<script>window.open('index.php?insert=insert','_self')</script>"; }
}
}
?>









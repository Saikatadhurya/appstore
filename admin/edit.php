<html>
<body>
<?php
include('index.php');
include('../includes/connect.php');
$edit_id = @$_GET['edit'];
$query = mysqli_query($db,"select * from new_post where id = '$edit_id'");

while($row=mysqli_fetch_assoc($query))
{
	$edit_id1= $row['id'];
	$title=$row['title'];
	$image=$row['image'];
	$content=$row['content'];
	$author=$row['author'];
	$date=$row['date'];
?>
<form action="edit.php?edit_form=<?php echo $edit_id1; ?>" method="post" enctype="multipart/form-data">
<table border="10" align="center">

<tr>
<td colspan="5" align="center" bgcolor="#FFCC66"><h1>Edit Post</h1></td>
</tr>

<tr>
<td align="right">Post Title:</td>
<td><input type="text" name="title" size="60" value="<?php echo $title;?>" /></td>
</tr>

<tr>
<td align="right">Author:</td>
<td><input type="text" name="author" size="60" value="<?php echo $author; ?>" /></td>
</tr>
<tr>
<td align="right">Post Image:</td>
<td><input type="file" name="image" size="60" />
<img src="../images/<?php echo $image; ?>" width="100" height="100">
</td>
</tr>

<tr>
<td align="right">Post Content:</td>
<td><textarea name="content" cols="62" rows="17" ><?php echo $content; ?></textarea></td>
</tr>

<tr>
<td colspan="5" align="center"><input type="submit" name="update" value="Update Now" /></td>
</tr>
<?php } ?>
</table>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['update']))
{
	$update_id = $_GET['edit_form'];
	
	$post_title = $_POST['title'];
	$post_date = date('y-m-d');
	$post_author = $_POST['author'];
	$post_content = $_POST['content'];
	$post_image = $_FILES['image']['name'];
	$post_image_tmp = $_FILES['image']['tmp_name'];
	$post_image_size = $_FILES['image']['size'];
	$post_image_type = $_FILES['image']['type'];

	
	
	if($post_image_type=="image/jpeg" or $post_image_type=="image/jpg" or $post_image_type=="image/png" or $post_image_type=="image/gif")
	{
		if($post_image_size<=100000)
		{
				move_uploaded_file($post_image_tmp,"../images/$post_image");
			$update_query="update new_post set title = '$post_title', author = '$post_author', image = '$post_image', content = '$post_content', date = '$post_date' where id = '$update_id'";
		}
		else 
		{
			echo("<script>alert('Larger Image, Only 1MB file size is valid.')</script>");
		}
	}
	else
	{
			echo("<script>alert('Invalid File Type.')</script>");
	}
	if(mysqli_query($db,$update_query))
	{
		echo"<script>alert('Post Has Been Updated..')</script>";
		echo"<script>window.open('index.php?view=view','_self')</script>";
	}
}
?>	
	
<?php
include('../includes/connect.php');

$delete_id = $_GET['del'];

$delete_query = "delete from new_post where id = '$delete_id'";
if(mysqli_query($db,$delete_query))
{
	echo "<script>alert('Post Has Been Deleted..');</script>";
	echo "<script>window.open('index.php?view=view','_self')</script>";
}
?>
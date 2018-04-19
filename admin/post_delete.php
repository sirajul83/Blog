<?php include('header.php');?>

<?php
	include('db.php');
	if(isset($_GET['id_delete'])){

		$id = $_GET['id_delete'];
		$sql="DELETE FROM add_post WHERE id_post='$id' ";
		$delete=$con->query($sql);
		if($delete===TRUE){
			echo "Data delete successfully";
		}else{
			echo "Data not delete".$sql;
		}
	}
?>
<?php include('footer.php');?>
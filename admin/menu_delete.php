<?php include('header.php');?>
	<?php
		if(isset($_GET['id_delete'])){
			include('db.php');
			$id= $_GET['id_delete'];
			$sql="DELETE FROM menu WHERE id_menu='$id'";
			$delete=$con->query($sql);
			if($delete===TRUE){
				echo "Delete succesfully";
			}else{
				echo "Data not delete";
			}
		}
	?>
<?php include('footer.php');?>
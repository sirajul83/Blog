<?php include('header.php');?>
	<?php 
		if(isset($_GET['id_delete'])){
			include('db.php');
				$id= $_GET['id_delete'];
				$sql="DELETE FROM footer WHERE id_footer='$id'";
				if($delete=$con->query($sql)){
					echo "Data deleted";
				}else{
					echo "Not delete".$sql;
				}
			}
	?>
<?php include('footer.php');?>
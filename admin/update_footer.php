<?php include('header.php');?>
	<div class="container">
		<div class="wrapper">
			<?php
				if(isset($_GET['id_update'])){
					include('db.php');
					$id= $_GET['id_update'];
					$sql="SELECT  * FROM footer WHERE id_footer='$id'";
					$show=$con->query($sql);
					if($show->num_rows>0){
						$data=$show->fetch_assoc();
						?>

			<form action="update_footer.php" method="POST">
				<div class="form-group">
					<span>update  Footer : </span>
					<input type="text" name="footer" class="form-control" placeholder="update foter" value="<?php echo $data['footer'];?>">
				</div>
				
				<div class="form-group">
					<input type="hidden" name="upid" value="<?php echo $data['id_footer']?>">
					<input type="submit" name="submit" class="btn btn-success" >
				</div>
			</form>
			<?php

					}
				}
			?>
		</div>
	</div>
	<?php
		if(isset($_POST['submit'])){
			include('db.php');
			$u_footer= $_POST['footer'];
			$up_id= $_POST['upid'];
			$SQL="UPDATE footer SET  footer='$u_footer' WHERE id_footer='$up_id'";
			if($result=$con->query($SQL)===TRUE){
				echo "footer updated";
			}else{
				echo "not update";
			}
		}
	?>
<?php include('footer.php');?>
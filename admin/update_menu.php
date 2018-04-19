<?php include('header.php');?>
	<div class="container">
		<div class="wrapper">
			<?php
				include('db.php');
				if(isset($_GET['id_update'])){

					$id= $_GET['id_update'];

					$show_sql="SELECT * FROM menu WHERE id_menu='$id'";
					$show=$con->query($show_sql);
					if($show->num_rows>0){
						while($data=$show->fetch_assoc()){
							?>

						
			<form action="update_menu.php" method="POST">
				<div class="form-group">
					<span>Update  menu : </span>
					<input type="text" name="home" class="form-control" placeholder="Update menu" value="<?php echo $data['home'];?>">
				</div>
				
				<div class="form-group">
					<input type="hidden" name="upid" value="<?php echo $data['id_menu']?>">
					<input type="submit" name="submit" class="btn btn-success" >
				</div>
			</form>
				<?php
						}
					}
				}
			?>
		</div>
	</div>


	<?php

		if(isset($_POST['submit'])){
			include('db.php');
			$menu = $_POST['home'];
			$upid = $_POST['upid'];
			$sql="UPDATE menu SET home='$menu' WHERE id_menu='$upid'";
			if($result=$con->query($sql)===TRUE){
				echo "menu update success";
			}else{
				echo "menu not update";
			}
		}

	?>
<?php include('footer.php');?>
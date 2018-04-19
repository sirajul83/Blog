<?php include('header.php');?>
	<div class="container">
		<div class="wrapper">
			<?php

				if(isset($_POST['submit'])){
					include('db.php');
					$home= $_POST['home'];
					$sql="INSERT INTO menu(home) VALUES('$home')";
					$result=$con->query($sql);
					if($result===TRUE){
						echo "Data insert succesfuly";
					}else{
						echo "Data not insert";
					}
				}
			?>
			<form action="add_menu.php" method="POST">
				<div class="form-group">
					<span>Add  menu : </span>
					<input type="text" name="home" class="form-control" placeholder="Add menu">
				</div>
				
				<div class="form-group">
					
					<input type="submit" name="submit" class="btn btn-success" >
				</div>
			</form>
		</div>
	</div>
<?php include('footer.php');?>
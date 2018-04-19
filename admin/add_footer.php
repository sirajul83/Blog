<?php include('header.php');?>
	<div class="container">
		<div class="wrapper">
			<?php

				if(isset($_POST['submit'])){
					include('db.php');
					$footer= $_POST['footer'];
					$sql="INSERT INTO footer(footer) VALUES('$footer')";
					$result=$con->query($sql);
					if($result===TRUE){
						echo "Data insert succesfuly";
					}else{
						echo "Data not insert";
					}
				}
			?>
			<form action="add_footer.php" method="POST">
				<div class="form-group">
					<span>Add  Footer : </span>
					<input type="text" name="footer" class="form-control" placeholder="Add footer">
				</div>
				
				<div class="form-group">
					
					<input type="submit" name="submit" class="btn btn-success" >
				</div>
			</form>
		</div>
	</div>
<?php include('footer.php');?>
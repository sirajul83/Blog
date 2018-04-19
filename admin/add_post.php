<?php include('header.php');?>


	<div class="container">
		<div class="wrapper">
<?php
	
	if(isset($_POST['submit'])){
		include('db.php');
		include('imgupload.php');
		$title   = $_POST['title'];
		$content = $_POST['content'];

		$sql="INSERT INTO add_post(title,content,img) VALUES('$title','$content','$pic')";
		$result=$con->query($sql);
		if($result===TRUE){
			echo "<div class='alert alert-success'>
  <strong>Success!</strong> New record created successfully.
</div>";
		}else{
			echo "<div class='alert alert-success'>
  <strong>Success!</strong> New record created successfully.
</div>";
		}
		
	}
?>
			<form action="add_post.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<span>Title : </span>
					<input type="text" name="title" class="form-control" placeholder="Title">
				</div>
				<div class="form-group">
					<span>Content : </span>
					<textarea class="form-control" name="content"></textarea>
				</div>
				<div class="form-group">
					<span>Image : </span>
					<input type="file" name="img" class="form-control" >
				</div>
				<div class="form-group">
					
					<input type="submit" name="submit" class="btn btn-success" >
				</div>
			</form>
		</div>
	</div>
<?php include('footer.php');?>
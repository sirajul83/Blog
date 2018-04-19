<?php include('header.php');?>


	<div class="container">
		<div class="wrapper">
			<?php

				include('db.php');
				if(isset($_GET['id_update'])){
					$id_update= $_GET['id_update'];
					$sql_show="SELECT * FROM add_post WHERE id_post='$id_update'";
					$show_data=$con->query($sql_show);
					if($show_data->num_rows > 0){
						while($data=$show_data->fetch_assoc()){

							?>

			<form action="update_post.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<span>Title : </span>
					<input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo $data['title'];?>">
				</div>
				<div class="form-group">
					<span>Content : </span>
					<textarea class="form-control" name="content" ><?php echo $data['content'];?></textarea>
				</div>
				<div class="form-group">
					<span>Image : </span><br>
					<img src="uploads/<?php echo $data['img'];?>" width='100px' height='100px'>
					<input type="file" name="img" class="form-control" >
				</div>
				<div class="form-group">
					
					<input type="hidden" name="upid" value="<?php echo $data['id_post'];?>" >
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
			include('imgupload.php');
			$title   = $_POST['title'];
			$content = $_POST['content'];
			$id= $_POST['upid'];
			
			$SQL="UPDATE add_post SET title='$title', content='$content',img='$pic' WHERE id_post='$id' ";
			$result=$con->query($SQL);
			if($result===TRUE){
				echo "Upadate success";
			}else{
				echo "not update".$SQL;
			}

		}
	?>
<?php include('footer.php');?>
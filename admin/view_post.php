<?php include('header.php');?>
	<div class="container-flud">
		<div class="wrapper_view">
			<table class="table table-bordered">
				<tr>
					<th>SL</th>
					<th>Title</th>
					<th>Content</th>
					<th>Picture</th>
					<th>Post Date</th>
					<th>Action</th>
				</tr>
				<?php
					include('db.php');
					$sql="SELECT * FROM add_post ";

					$show=$con->query($sql);
					$sl=0;
					if($show->num_rows > 0){
						while($data=$show->fetch_assoc()){
							$sl=$sl+1;
							?>

				<tr>
					<td><?php echo $sl ;?></td>
					<td><?php echo $data['title']?></td>
					<td><?php echo $data['content']?></td>
					<td><img src="uploads/<?php echo $data['img']?>" width="50px" height="50px"></td>
					<td><?php echo $data['time']?></td>
					<td>
						<a href="post_delete.php?id_delete=<?php echo $data['id_post'];?>" class="btn btn-danger btn-sm">Delete</a>
						<a href="update_post.php?id_update=<?php echo $data['id_post']?>" class="btn btn-primary btn-sm">Update</a>
					</td>
				</tr>

							<?php
						}
					}
				?>
			</table>
		</div>
	</div>
<?php include('footer.php');?>
<?php include('header.php');?>
	<div class="container-flud">
		<div class="wrapper_view">
			<table class="table table-bordered">
				<tr>
					<th>SL</th>
					<th>menu</th>
					<th>Post Date</th>
					<th>Action</th>
				</tr>
				<?php
					include('db.php');
					$sql="SELECT * FROM footer ";

					$show=$con->query($sql);
					$sl=0;
					if($show->num_rows > 0){
						while($data=$show->fetch_assoc()){
							$sl=$sl+1;
							?>

				<tr>
					<td><?php echo $sl ;?></td>
					<td><?php echo $data['footer']?></td>

					<td><?php echo $data['time']?></td>
					<td>
						<a href="footer_delete.php?id_delete=<?php echo $data['id_footer'];?>" class="btn btn-danger btn-sm">Delete</a>
						<a href="update_footer.php?id_update=<?php echo $data['id_footer']?>" class="btn btn-primary btn-sm">Update</a>
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
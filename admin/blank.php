<?php 
	session_start();
	include('header.php');
?>
<?php
	
	include('db.php');
	if(isset($_session['admin_name'])){
		echo $_session['admin_name'];

	}
?>
  <h3>Hello</h3>
<?php include('footer.php');?>
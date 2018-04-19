
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Blog site</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <?php
    session_start();
    if(isset($_POST['submit'])){
      include('db.php');
      $admin_name= $_POST['admin'];
      $admin_pass=md5($_POST['pass']);
      $sql="SELECT * FROM login";
      $result=$con->query($sql);
        while($data=$result->fetch_assoc()){
          $user=$data['admin_name'];
          $pass=$data['password'];
          if($admin_name===$user AND $admin_pass===$pass){
            header("location:blank.php");
            $_session['admin_name']=$user;
          }else{
            echo "Wrong admin or password";
          }
        }
    }
?>
 
<div class="container">
  <div class="login_area">
    <form action="index.php" method="POST">
      <div class="form-group">
        <input type="test" name="admin" placeholder="admin name" class="form-control">
      </div>
      <div class="form-group">
        <input type="password" name="pass" placeholder="password" class="form-control">
      </div>
      <div class="form-group">
        <input type="submit" name="submit" value="Login"  class="btn btn-success">
      </div>
    </form>
  </div>

</div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
</body>

</html>
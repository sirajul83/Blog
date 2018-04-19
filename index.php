<!DOCTYPE html>
<html>
	<head>
    	<title> blog home</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        	<link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
        	<link href="assets/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
            <link href="assets/css/style.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
    <section id="menubar">
   <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="assets/img/portfolio/logo2.png" class="logo_img"/></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse  navbar-right" id="bs-example-navbar-collapse-1">
            <?php 
            include('admin/db.php');
            $sqlmenu="SELECT * FROM menu";
            $menushow=$con->query($sqlmenu);
            if($menushow->num_rows > 0){
               while( $datamenu=$menushow->fetch_assoc()){
                 
                ?>
              
          <ul class="nav navbar-nav ">
            <li><a href="#"><?php echo  $datamenu['home'];?></a></li>
            
            
          </ul>
           <?php
                } 
            }
        ?>
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
</nav>
    </section><!--   menubar end-->
    <section id="home">
    	<div class="container-fluid">
        	<div class="row">
                 <?php
                    include('admin/db.php');
                    $sql="SELECT * FROM add_post ";

                    $show=$con->query($sql);
                    $sl=0;
                    if($show->num_rows > 0){
                        while($data=$show->fetch_assoc()){
                            $sl=$sl+1;
                            ?>
            	<div class="col-lg-4 col-md-4 col-sm-4">
                	<div class="blog_img">
                    	<img src="admin/uploads/<?php echo $data['img']?>"  class="img-responsive">
                    </div>
                </div>
               

                <div class="col-lg-8 col-md-8 col-sm-8">
                	<div class="blog_content">
                    	<h2> <?php echo $data['title']?>  </h2>
                         <p>
                    		<b>  <?php echo $data['time']?> </b><br>
                            
                        </p>
					<p>
						  <?php echo $data['content']?>
					</p><span> <a href="#"> Read More</a></span>
                   
                    </div>
                </div>
                
                        <?php
                        }
                    }
                ?>
               
                
            </div>
        </div>
    </section>
    <footer class="footer_area">
        <?php
            include('admin/db.php');
            $sqlfooter="SELECT * FROM footer";
            $footershow=$con->query($sqlfooter);
            if($footershow->num_rows > 0){
                $datafooter=$footershow->fetch_assoc();
                ?>

    	<p> &copy; <?php echo  $datafooter['footer'];?> </p>
         <?php
                
            }
        ?>
    </footer>
    	
     <script type="text/javascript" src="assets/js/jquery.min.js"></script>
     <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
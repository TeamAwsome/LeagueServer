<?php session_start();
//if user already logged in redirect to the dash board
  if(isset($_SESSION['user'])){
  	  
  	  header("Location: /dash.php");
  	  exit();
  }
?>
<!-- NAVBAR -->
<?php require("../templates/main_index/header.php")?> 

  <body>
    <!-- Carousel -->
    <?php require("../templates/main_index/carousel.php") ?>
	<div class='content'>
	
	     <!-- container for blog -->
	     <div id='blog' class="container" >
	     <?php require("../templates/main_index/blog_header.php") ?>
                <div class="row">
                   <div class="col-sm-8 blog-main"> <!-- blog main -->
                   <?php require("../templates/main_index/blog_posts.php") ?>
                   <ul class="pager">
                      <li><a href="#">Previous</a></li>
                      <li><a href="#">Next</a></li>
                   </ul>
                   </div><!-- /.blog-main -->
                   <!-- blog sidebar -->
                   <?php require("../templates/main_index/blog_sidebar.php") ?>
                </div><!-- /.row -->
             </div><!-- /.container -->
			
             <!-- officer container -->
             <div id='officers' class="container marketing" hidden>
              <?php require("../templates/officers/officers.php") ?>
             </div><!-- /.container -->
			
			
	</div> <!-- /.content -->
	
	<?php require("../templates/main_index/modal_login.php")?>
	<?php require("../templates/main_index/modal_register.php")?>
	<?php require("../templates/main_index/blog_footer.php") ?>
			
<?php require("../templates/main_index/footer.php")?>

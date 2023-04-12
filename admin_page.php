<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
      <header>

            <input type="checkbox" name="" id="toggler">
            <label for="toggler" class="fas fa-bars"></label>

            <a href="#" class="logo">face<span> ID</span></a>
         <nav class="aunavbar">
            <a href="#admin">admin</a>
            <a href="#article">article</a>
         </nav>

      </header>
<section class="admin" id="admin">   
      <div class="container">

         <div class="content">
      
            <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
            <p>this is an admin page</p>
            <a href="video.html" class="btn">face registration</a>
            <a href="logout.php" class="btn">logout</a>
         </div>

      </div>
</section>

<section class="article" id="article">
            <h1 class="heading"><span>article</span> </h1>
      <div class="links">
         <div class="pdf1">
            <a href="pdf1.pdf">Design and Analysis of algorithm</a>
         </div>
         <div class="pdf2">
            <a href="pdf2.pdf">CG Project Report on Walking Man in the Rain</a>
         </div>
         <div class="pd3">
            <a href="pdf3.pdf">Project Report on Network Architecture</a>
         </div>
         <div class="pdf4">
            <a href="pdf4.pdf">Case Study on Digital Certificate</a>
         </div>
         <div class="pdf5">
            <a href="pdf5.pdf">Project Report on Student Attendance Management System</a>
         </div>
         <div class="pdf6">
            <a href="pdf6.pdf">Kerberos Authentication Protocol</a>
         </div>
      </div>   
</section>
</body>
<footer class="fcontainer">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>© 2022–2023 FaceID, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    
  </footer>

    <!doctype html>
    <html lang="en">
</html>
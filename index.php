
<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>face ID website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>
<body>

    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">face<span> ID</span></a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#contact">contact</a>
        </nav>

    </header>

    <section class="home" id="home">
        <div class="hcontent">
            <h1>Login your <br><span>Face ID</span><br>Easily</h1>
            <p class="par">Hey, Welcome to Face ID!<br>
            Do you want to login your face here? <br>
            We hope, you won't find any difficulties to login here :)</p>
                
                <div class="hform-container">

                    <form action="" method="post">
                       <h3>login here</h3>
                       <?php
                            if(isset($error)){
                            foreach($error as $error){
                            echo '<span class="error-msg">'.$error.'</span>';
                            };
                            };
                        ?>
                       
                       <input type="email" name="email" required placeholder="email">
                       <input type="password" name="password" required placeholder="password">
                       <input type="submit" name="submit" value="login" class="form-btn">
                       <p>don't have an account? <a href="register_form.php"><br>register here</a></p>
                    </form>
                 
                </div>
        </div>
    
    </section>   
    
    <section class="about" id="about">
            <h1 class="heading"><span>about</span> face ID</h1>
        <div class="row">

            <div class="video-container">
                <video src="face.mp4" loop autoplay muted></video>
               
            </div>
    
            <div class="content">
                <p>This system allows biometric authentication.<br>
                        It generates a 3D facial map.<br>
                        This map is compared with the registered face using a secure subsystem, 
                        <br>and the user is authenticated if the two faces match sufficiently.</p>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h1 class="heading"><span>contact</span> us</h1>


    
        
        <div class="ccontent">
            <div class="ccontent-form">
                <section>
                    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                    <h2>Address</h2>
                    <p>
                        THEEM COLLEGE OF ENGINEERING,<br>
                        Betegaon, Chillar Road, Boisar (E),<br>
                        Tal. & Dist. : Palghar. 401505.
                    </p>
                </section>

                <section>
                    <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                    <h2>Phone</h2>
                    <p>+91 72761 08550<br>+91 93223 26609</p>
                </section>

                <section>
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                    <h2>E-mail</h2>
                    <p>gauravimokashi@gmail.com<br>golatkaraishwarya@gmail.com</p>
                </section>
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
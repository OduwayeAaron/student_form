<?php
    include "db.php";
    session_start();
    
   


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration form</title>
    <link rel="stylesheet" href="form.css">
  </head>
  <body>
    
    <div class="container">
    <div class="img">
        <img src="img/logo.png" style="width:50px; height:50px">
    </div>
        <div class="heading"> Students Registration</div>
        <div class="message"> 
            <?php
                include "message.php";
            ?>
        </div>
        <form action="codeprocess.php" method="POST" enctype="multipart/form-data">
            <div class="card-details">
                <div class="card-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="name" placeholder="Enter your name" >
                </div>
                <div class="card-box">
                    <span class="details">Email</span>
                    <input type="text" name="email" placeholder="Enter your email" >
                </div>
                <div class="card-box">
                    <span class="details">Password</span>
                    <input type="password" name="pass" placeholder="Enter your password">
                </div>
                <div class="card-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" name="cpass" placeholder="Enter your confirmed password" >
                </div>
                <div class="card-box">
                    <span class="details">Picture</span>
                    <input type="file" name="img" accept="image/jpeg, image/jpg, image/png" class="select" >
                </div>
                <div class="card-box">
                    <span class="details">Choose a course</span>
                    <select name="course" class="select" >
                        <option selected>Open this select menu</option>
                        <option>Front End Development</option>
                        <option>Back End Development</option>
                        <option>Full Stack Development</option>
                        <option>Wordpress Design</option>
                        <option>UI/UX Design</option>
                        <option>Graphic Design</option>
                    </select>

                </div>
            </div>
            <div class="circal-form">
                <span class= "circal-title">Gender</span>
                <div class="category">
                    <input type="radio" name="gender">Male
                    <input type="radio" name="gender">Female
                    <input type="radio" name="gender">Others
                </div>
            </div>
        <div class="button">
            <input type="submit" name="submit" value="Register Now" > 
        </div>
        </form>
        <div style="padding-top:10px;">Do you have an account <a href="login.php" style="text-decoration:none; color: #F16636;">Login</a></div>
    </div>
       

    
  </body>
</html>
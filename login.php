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
        <div class="heading"> Students Login</div>
        <form action="codeprocess.php" method="POST">
            <div class="card-details">
                <div class="card-box">
                    <span class="details">Email</span>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="card-box">
                    <span class="details">Password</span>
                    <input type="text" name="pass" placeholder="Enter your password">
                </div>
                
            </div>
            
        <div class="button">
            <input type="submit" name="login" value="Login" > 
        </div>
        </form>
        <div style="padding-top:10px;">You dont have an account<a href="create_student.php" style="text-decoration:none; color: #F16636;"> Register here</a></div>
    </div>
       

    
  </body>
</html>
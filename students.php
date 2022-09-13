<?php
    include "db.php";
    session_start();
    $user_id = $_SESSION['user_id'];

    if(!isset( $user_id)){
        header('location:login.php');
    };
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration form</title>
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .img_center{
            height:120px;
            width:120px;
            border: 5px solid #05073a;
            border-radius:50%;
            margin-top:40px;
            justify-content:center;
            text-align:center;
        }
        .card_pad{
            margin-right:10px;
        }
        .img_align{
            text-align:center;
        }
    
        @media screen and (min-width: 600px){
            .card_pad{
                width:20rem;
            }
        }
        @media screen and (max-width: 600px){
            body{
                padding:20px;
            }
        }
      
    </style>
  </head>
<body style="background:#F16636">
    <div class="container py-5 W-80">
        <div class="row mt-4 ">
        <?php
            
            $select = "SELECT * FROM ogadregister";
            $select_run = mysqli_query($conn,  $select);
            if(mysqli_num_rows($select_run )>0){
            while ($fetch = mysqli_fetch_assoc($select_run)){
                // echo $fetch['name'];

               
            ?>
            <div class="card col-sm-3 mb-3 card_pad ">
                <div class="img_align">
                    <?php
                    
                        if($fetch['image'] == ''){
                            echo '<img src="image/pic.png" class="img_center">';
                        }else{
                            echo '<img src="img_upload/'.$fetch['image'].'" class="img_center">';
                        }
                    ?>
                </div>
                <div class="card-body" style="text-align:center">
                    <h5 class="card-title" style="font-size:26px"><?=$fetch['name']?></h5>
                    <p class="card-text" style="font-size:18px; font-weight:700"><?=$fetch['email']?></p>
                    <a href="#" class="btn btn-primary" style="background:#05073a; "><?=$fetch['course']?></a>
                </div>
            </div>
            <?php
            }
        }
                    ?>

           
        </div>
    </div>
   
   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
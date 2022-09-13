<?php
include "db.php";
session_start();


//This is the login process
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    $select = "SELECT * FROM ogadregister WHERE email = '$email' AND password = '$pass'";
    $select_run = mysqli_query($conn, $select);
    if(mysqli_num_rows($select_run)>0){
        $row = mysqli_fetch_assoc($select_run);
        $_SESSION['message'] = "Successfully login";
        $_SESSION['user_id'] = $row['id'];
        header('location:students.php');
    }else{
        $_SESSION['message'] = "incorrect email or password";
        header('location:students.php');
    }
}

//this is the registration process
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpass']);
    $img = $_FILES['img']['name'];
    $img_size = $_FILES['img']['size'];
    $img_tmp_name = $_FILES['img']['tmp_name'];
    $target = 'img_upload/' . $img;
    $cpass = mysqli_real_escape_string($conn, $_POST['cpass']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    $select = "SELECT * FROM ogadregister WHERE email = '$email' AND password = '$pass'";
    $select_run = mysqli_query($conn, $select);
    if(mysqli_num_rows($select_run)>0){
        $_SESSION['message'] = "User already exit!";
        header('location:create_student.php');
    }else{
        if($pass != $cpass){
        $_SESSION['message'] = "Password does not match!";
        header('location:create_student.php');
        }elseif($img_size > 2000000){
        $_SESSION['message'] = "Image too large!";
        header('location:create_student.php');
        }else{
    
    $insert = "INSERT INTO ogadregister (name, email, password, image, course, gender) VALUE ('$name', '$email','$pass', '$img', '$course', '$gender')";
    $insert_run = mysqli_query($conn, $insert);
     if($insert_run){
        move_uploaded_file($img_tmp_name, $target);
        header('location:login.php');
     }else{
        header('location:create_student.php');
     }
    }
    
}

}

?>
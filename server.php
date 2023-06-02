<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);
   $cpassword = md5($_POST['cpassword']);
   $user_type = $_POST['usertype'];

   $select = " SELECT * FROM register WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['username'] = $row['username'];
         header('location:admin.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['username'] = $row['username'];
         header('location:home.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>
<?php
    $con = mysqli_connect("localhost","root","","registeruser");
     if($con){
         echo "connection successfull";
     }else{
         echo "connection failed";
     }
     
     $id=$_GET['id'];

     $name=$_POST['tname'];
     $email=$_POST['temail'];
     $phone=$_POST['tphone'];
     $password=$_POST['tpassword'];

     $q1="update register set id='$id',name='$name',email='$email',phone='$phone',password="$password" where id='$id'";

     mysqli_query($con,$q1);

     header('location:Form.php');

?>
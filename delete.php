<?php
    $con = mysqli_connect("localhost","root","","registeruser");
     if($con){
         echo "connection successfull";
     }else{
         echo "connection failed";
     }

     $id = $_GET['id'];

     $q1 = "delete from register where id = $id" ;
     mysqli_query($con,$q1);

     header('location:Form.php');

?>  
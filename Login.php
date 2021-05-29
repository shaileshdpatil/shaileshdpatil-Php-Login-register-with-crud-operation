<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
<h1>Login from here</h1>
    <div class="shailu">
        <form class="main-container" method="POST">
        <?php
        $con = mysqli_connect("localhost", "root", "", "registeruser");

        if(isset($_POST['submit'])){
            $email=$_POST['email'];
            $password=$_POST['password'];

            $q1 = mysqli_query($con,"select * from register where email='$email' and password='$password'");
            $row=mysqli_fetch_array($q1,MYSQLI_ASSOC);
            $count=mysqli_num_rows($q1);
            if($count==1){
                echo "<font color='green'>successfully login user";
            }else{
                echo "<font color='red'>user login failed";
            }
        }


?>

            <div class="inputData">
                <label>Email</label></br>
                <input type="text" name="email" placeholder="Enter Email">
            </div>
            <div class="inputData">
                <label>Password</label></br>
                <input type="text" name="password" placeholder="Enter Password">
            </div>
            <a href="http://localhost/PHP/Form.php">Alredy have account</a>
            <div class="inputData">
                <button type="submit" name="submit">Login</button>
            </div>

        </form>
</body>
</html>
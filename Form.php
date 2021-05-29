<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- <link rel="stylesheet" type="text/css" href="design.css"> -->
</head>

<body>
    <h1>Register from here</h1>
    <div class="shailu">
        <form class="main-container" method="POST">
        
        <?php 
    
    $con=mysqli_connect("localhost", "root", "", "registeruser");
    if(!$con)
    {
    echo "Connection Fail";
    }

    //r die("cannot connected")x`
    if(isset($_POST['submit'])){

        $name=$_POST['tname'];
        $email=$_POST['temail'];
        $phone=$_POST['tphone'];
        $password=$_POST['tpassword'];
    
        $query = mysqli_query($con,"insert into register values(null,'$name','$email ','$phone','$password')");
    
        if($query){
            echo "<font color='green'>successfully registereed.";    
        }else{
            echo "<font color='red'>failed";
        }
    }

    if(isset($_REQUEST["update"])){
        $id = $_REQUEST["id"];
        $name = $_REQUEST['tname'];
        $email =$_REQUEST['temail'];
        $phone=$_REQUEST['tphone'];
        $password=$_REQUEST['tpassword'];
    
        $q1=mysqli_query($con,"update register set name='$name',email='$email',password='$password' where id='$id'");
    
    }
    ?>  

            <div class="inputData">
                <label>id</label></br>
                <input type="text" name="id" placeholder="Enter name">
            </div>
            <div class="inputData">
                <label>Name</label></br>
                <input type="text" name="tname" placeholder="Enter name">
            </div>
            <div class="inputData">
                <label>Email</label></br>
                <input type="text" name="temail" placeholder="Enter Email">
            </div>
            <div class="inputData">
                <label>Phone</label></br>
                <input type="text" name="tphone" placeholder="Enter Phone">
            </div>
            <div class="inputData">
                <label>Password</label></br>
                <input type="text" name="tpassword" placeholder="Enter Password">
            </div>
            <a href="http://localhost/PHP/Login.php">Forget password</a>
            <div class="inputData">
                <button type="submit" name="submit">Submit</button>
                <button type="submit" name="update" value="update">update</button>
            </div>

        </form>
    </div>

<br>
<h1>Data by user</h1>
<?php
 $con=mysqli_connect("localhost", "root", "", "registeruser");
$q2=mysqli_query($con,"select * from register");

?>
<table>
    <tr>

    <th>ID</th>
    <th>name</th>
    <th>email</th>
    <th>phone</th>
    </tr>
<?php
while($row=mysqli_fetch_array($q2))
{
    ?>
   <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
        <td><button><a href="delete.php?id=<?php echo $row['id']; ?>">delete</a></button></td>
        
    </tr>
    <?php
}
?>
</table>
</body>

</html>
<?php
session_start();
if(isset($_POST['submit'])) {
    //captruing the data
    $user=$_POST['username'];
    $pass = md5($_POST['password']);
    $rem=$_POST["remember"];

    //Preparing the SQL Statement for Making Login
    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass' and status=1";
    //making connection
    include("connect.php");
    //execiting the query
    $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
    //counting the record
    $count=mysqli_num_rows($qry);
    if ($count== 1){
        $_SESSION['username'] = $user;
        $_SESSION['logintime']=date("ymdhisa");
        header("Location:admin/dashboard.php");
    }
    else{
        echo "Something wrong";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="" enctype="multipart/form-data" name="login">
        <fieldset>
            <legend>User Login</legend>
            <input type="text" name="username" placeholder="Username" required> 
            <br>
            <input type="password" name="password" placeholder="Password" required>
            <br>
            <input type="checkbox" name="remember" value="remember" > Remeber Me<br>
            <input type="submit" name="submit" value="Login">
            <p>Don't have an account <a href="register.php">Register</a></p>

        </fieldset>
    </form>
    
</body>
</html>
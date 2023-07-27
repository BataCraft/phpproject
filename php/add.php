<?php

if (isset($_POST["submit"]))
{
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    $status=1;


    //Connection with database
    include("connect.php");
        $sql= "INSERT INTO inquiry(username, email, role, status) VALUES('$username', '$email', '$role', '$status')";
        $qry = mysqli_query($coon, $sql);
        if($qry)
        {
            echo "done";
        }
        else
        {
            echo "Something Wrong";
        }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- <link rel="stylesheet" href="./Css/style.css"> -->
</head>

<body>
    <form  method="post" name="login" enctype="multipart/form-data" action="">
        <label for="username">User Name*</label><br><br>
        <input type="text" name="username">
        <br><br>
        <label for="password">Password*</label><br><br>
        <input type="password" name="password" id="#" placeholder="Enter your password">
        <br><br>
        <label for="email">Email*</label><br><br>
        <input type="email" name="email" placeholder=" Eneter your EMAIL/Number" required="">
        <br><br>
        <label for="role">Role</label>
        <br><br>
        <input type="text" name="role">
        <br><br>
        <input type="submit" name="submit" id="#">
        <input type="reset" name="cancel" id="#" value="Cancel">
    </form>
</body>

</html>
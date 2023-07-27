<?php

if (isset($_POST["Sumit"]))
{
    $id = $_POST["id"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    // // Check if the user exists in database using SELECT statement.
    // $sql_query="SELECT * FROM users WHERE username='$username' AND password='$password'";
    // $result=mysqli_query($conn,$sql_query);
    // while ($row= mysqli_fetch_assoc($result)) {
    //     session_start();
    //     $_SESSION['user'] = $row;
    //     header("location: index.html");
    //     } else {
    //         echo "Invalid Login";
    //         }
    $email = $_POST["email"];
    $role = $_POST["role"];
    $status=0;


    //Connection with database
    include("php/connect.php");
        $sql= "INSERT INTO inquiry(id, username, email, role, status) VALUES('$id', '$username', '$email', '$role', '$status')";
        $qry = mysqli_query($coon,$sql);
        if($qry)
        {
            header("Location: fetch.php");
        }
        else
        {
            echo "Something Wrong";
        }

}

?>

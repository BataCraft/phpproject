<?php

$sql="SELECT * FROM inquiry ORDER BY id DESC";
include("connect.php");
$qry = mysqli_query($conn, $sql) or die (mysqli_error($conn));
$count = mysqli_num_rows($qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border: 2px border: collaps>
        <tr>
            <td>ID</td>
            <td>User Name</td>
            <td>PASSWORD_DEFAULT</td>
            <td>Email</td>
            <td>Role</td>
            <td>Status</td>
            <td>Created at</td>
            <td>Updated at</td>
            <td>Updated at</td>
            <td>function</td>
        </tr>
        <?php
        while($row=mysqli_fetch_array($qry))
        {
            $iid=$row["id"];
            echo<"tr">;
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["username"]."</td>";
            echo "<td>".$row["password"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["role"]."</td>";
            echo "<td>".$row["status"]."</td>";
            echo "<td>".$row["created_at"]."</td>";
            echo "<td>".$row["update_at"]."</td>";
            echo "<td>EDIT 
            <a href='editdelete.php?iid=$iid&action=delete'>
            DELETE
            </a>
            </td>";
        }
        ?>
    </table>
</body>
</html>
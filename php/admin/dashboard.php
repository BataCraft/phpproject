<?php
include("session.php");
    echo "WELCOME, " .$_SESSION['username']. "<br>";
    echo "<a href=logout.php>Logout</a>";
?>
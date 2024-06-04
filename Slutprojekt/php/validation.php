<?php
$fakeUsername = "Alfred";
$fakePassword = "  ";

if($_POST["username"] == $fakeUsername && $_POST["password"] == $fakePassword)
{
    
    session_start();
    $_SESSION["loggedIn"] = 1;
    
    header("Location: index.php");
}
?>
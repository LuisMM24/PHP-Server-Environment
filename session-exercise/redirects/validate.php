<!-- All login validations must be done in this file receiving the form data by the POST method and this should redirect 
the user depending on whether the login is correct or not. You can use a simple string comparison or anything you want for deciding if the login is correct or not -->
<?php
session_start();

if ($_POST["email"] === "luism@gmail.com" && $_POST["pass"] === "test123") {
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["pass"] = $_POST["pass"];
    header("location:./../panel.php");
}

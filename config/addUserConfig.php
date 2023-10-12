<?php

if (isset($_POST["addUser"])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $repwd = $_POST["repwd"];
    $role = $_POST["role"];

    include_once("./databaseConfig.php");
    include_once("./functions.php");

    addUser($conn, $fname, $lname, $email, $username, $pwd, $role);
}
else {
    header("location: ../index.php");
}

?>
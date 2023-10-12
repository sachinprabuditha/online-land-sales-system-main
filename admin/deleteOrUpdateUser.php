<?php

if (isset($_POST["delete"])) {

    $id = $_POST["id"];
    $role = $_POST["role"];

    include_once("../config/databaseConfig.php");
    include_once("../config/functions.php");

    deleteUser($conn, $id, $role);

    header("location: ../adminDashboard.php");
}
else if (isset($_POST["update"])){

    $id = $_POST["id"];
    $role = $_POST["role"];

    header("location: ../updateUser.php?id=$id&role=$role");
}
else {
    header("location: ../index.php");
}

?>
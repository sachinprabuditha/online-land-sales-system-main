<?php

// LocalHost

  $dbServername = "localhost";
  $dbUsername = 'root';
  $dbPassword = "";
  $dbName = "landvault";

//  $dbServername = "us-cdbr-east-06.cleardb.net";
//  $dbUsername = 'b6317de519a1c1';
//  $dbPassword = "e31c6ea7";
//  $dbName = "heroku_e9d5172e0522a9a";

 //Get Heroku ClearDB connection information
// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"],1);
// $active_group = 'default';
// $query_builder = TRUE;
// Connect to DB
// $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

 $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

    echo "<h1 style='padding-top: 100px'>Please Check the databaseConfig.php file</h1>";
}

?>

<!-- mysql://b6317de519a1c1:e31c6ea7@us-cdbr-east-06.cleardb.net/heroku_e9d5172e0522a9a?reconnect=true -->
<!-- landvault@Sliit1 -->
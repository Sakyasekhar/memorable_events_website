<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    


    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "mysql";
  
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    // Insert user data into the database
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    mysqli_query($conn, $query);

    mysqli_close($conn);

    header("Location: login.php");
    exit();
}
?>

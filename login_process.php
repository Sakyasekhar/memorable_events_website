<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "mysql";
  
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    // Retrieve hashed password from the database based on the entered username
    $query = "SELECT id, password FROM users WHERE username='$enteredUsername'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $hashedPassword = $row["password"];

    mysqli_close($conn);

    if (password_verify($enteredPassword, $hashedPassword)) {
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["username"] = $enteredUsername;
        header("Location: home.php");
        exit();
    } else {
        echo "Login failed. Invalid credentials.";
    }
}
?>


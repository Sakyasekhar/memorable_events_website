<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish database connection (replace with your credentials)
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "mysql";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $eventType = $_POST["event_type"];
    $eventDate = $_POST["event_date"];
    $eventVenue = $_POST["event_venue"];
    $guestCount = $_POST["guest_count"];
    $message = $_POST["message"];
    $contactPreference = $_POST["contact_preference"];

    // Prepare and execute SQL query to insert data into the "event_inquiries" table
    $sql = "INSERT INTO event_inquiries (name, email, phone, event_type, event_date, event_venue, guest_count, message, contact_preference)
            VALUES ('$name', '$email', '$phone', '$eventType', '$eventDate', '$eventVenue', '$guestCount', '$message', '$contactPreference')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Inquiry submitted successfully!"); window.location.href = "offerings.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Form submission method not allowed.";
}

error_reporting(E_ALL); ini_set('display_errors', 1);
?>

<?php
// Replace with your actual database credentials
$host = 'localhost';
$username = 'u986916771_mtfe';
$password = 'Mtfe#123';
$db_name = 'u986916771_mtfelogin';


// Establishing connection to MySQL
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize the user input to prevent SQL injection
    $inputName3 = mysqli_real_escape_string($conn, $_POST['name']);
    $inputEmail3 = mysqli_real_escape_string($conn, $_POST['email']);
    $inputNumber3 = mysqli_real_escape_string($conn, $_POST['number']);
    $inputOpt3 = mysqli_real_escape_string($conn, $_POST['request']);
    $inputOther3 = mysqli_real_escape_string($conn, $_POST['other']);

    // Inserting data into the database
    $sql = "INSERT INTO users (name, email, number, request, other) VALUES ('$inputName3', '$inputEmail3', '$inputNumber3', '$inputOpt3', '$inputOther3')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to another page after successful registration
        header("Location: /sucess.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

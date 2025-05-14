<?php
// Connect to database using mysqli
$conn = mysqli_connect("localhost", "root", "", "document");

if (!$conn) {
    die("Connection failed❌: " . mysqli_connect_error());
}

// Handle form submission
if (isset($_POST['name']) && isset($_POST["email"]) && isset($_POST["password"])) {
    $name     = $_POST["name"];
    $email    = $_POST["email"];
    $password = $_POST["password"];

    // Insert into database
    $sql = "INSERT INTO information (name, email, password) VALUES ('$name', '$email', '$password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Customer Registered Successfully✅!'); window.location.href='ourservice.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

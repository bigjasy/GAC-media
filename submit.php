<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default XAMPP MySQL username
$password = ""; // Default XAMPP MySQL password is empty
$dbname = "gacmediadb"; // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$numero = $_POST['numero']; // Corrected to match the form field name
// Prevent SQL injection
$name = $conn->real_escape_string($name);
$email = $conn->real_escape_string($email);
$numero = $conn->real_escape_string($numero);
// Insert data into the database
$sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$numero')"; // Corrected column name to 'phone'
if ($conn->query($sql) === TRUE) {
} else {
    echo "Erreur : " . $sql . "
" . $conn->error;
}
// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<div class="background-video">
    <img src="images/Untitled design (2).png" alt="Background">
</div>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Status</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <div style="text-align: center; margin-top: 50px;">
        <h1 style="font-size: 36px; margin-top: 20px;">Merci, nous vous contacterons bientôt.</h1>
        <a href="index.html" style="text-decoration: none; display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #007bff; color: #fff; border-radius: 5px;"><i class="fas fa-arrow-left"></i> Retour à l'accueil</a>
    </div>
    </div>
    <style>
        .container{
            margin-bottom: 100px;
        }
    </style>
</body>
</html>

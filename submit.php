<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    echo "<div class='container'>";
    echo "<h1>Registration Successful!</h1>";
    echo "<h2>Your Submitted Information:</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</ strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Message:</strong> $message</p>";
    echo "</div>";
} else {
    echo "Invalid request.";
}
?>
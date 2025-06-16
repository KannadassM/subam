<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "kannadass75904@gmail.com";  // 🔁 Replace this with your actual email
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $subject = "New Message from Subam Bricks Website";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "✅ Message sent successfully!";
    } else {
        echo "❌ Message failed to send.";
    }
} else {
    echo "Invalid request.";
}
?>

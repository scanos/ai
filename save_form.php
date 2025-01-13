<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    // Send email notification
    $to = $email;
    $subject = "Contact Form Submission";
    $body = "Thank you for your message. We have received your details.";
    $headers = "From: no-reply@dogmindingservice.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "New record created successfully and email sent.";
    } else {
        echo "New record created successfully but email could not be sent.";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

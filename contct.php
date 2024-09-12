<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $fullName = isset($_POST['fullName']) ? $_POST['fullName'] : '';
    $number = isset($_POST['number']) ? $_POST['number'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : ''; // Optional email field
    $location = isset($_POST['location']) ? $_POST['location'] : '';
    $event = isset($_POST['event']) ? $_POST['event'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $guestNumber = isset($_POST['guestNumber']) ? $_POST['guestNumber'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Construct email content
    $subject = "Enquiry from Website";
    $body = "Full Name: $fullName\n";
    $body .= "Number: $number\n";
    $body .= "Email: $email\n";
    $body .= "Location: $location\n";
    $body .= "Event Type: $event\n";
    $body .= "Event Date: $date\n";
    $body .= "Number of Guests: $guestNumber\n";
    $body .= "Message: $message";

    // Email recipients
    $primaryRecipient = "bhalevindubhojanam1@gmail.com";
    $secondaryRecipient = "reymould.social@gmail.com";
    
    // Email headers (optional, but recommended for email formatting)
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email to both recipients
    $primaryMailSent = mail($primaryRecipient, $subject, $body, $headers);
    $secondaryMailSent = mail($secondaryRecipient, $subject, $body, $headers);

    // Check if both emails were successfully sent
    if ($primaryMailSent && $secondaryMailSent) {
        // Redirect on success
        header("Location: contact.html?emailSuccess=true");
    } else {
        // Redirect on failure
        header("Location: contact.html?emailSuccess=false");
    }
    exit;
}
?>

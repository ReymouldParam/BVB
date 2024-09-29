<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data with validation
    $fullName = isset($_POST['fullName']) ? trim($_POST['fullName']) : '';
    $number = isset($_POST['number']) ? trim($_POST['number']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : ''; // Optional email field
    $location = isset($_POST['location']) ? trim($_POST['location']) : '';
    $event = isset($_POST['event']) ? trim($_POST['event']) : '';
    $date = isset($_POST['date']) ? trim($_POST['date']) : '';
    $guestNumber = isset($_POST['guestNumber']) ? trim($_POST['guestNumber']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // Validate required fields
    if (empty($fullName) || empty($number) || empty($event) || empty($date)) {
        // Redirect with an error if required fields are missing
        header("Location: contact.php?emailSuccess=false");
        exit;
    }

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
    
    // Email headers
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email to both recipients
    $primaryMailSent = mail($primaryRecipient, $subject, $body, $headers);
    $secondaryMailSent = mail($secondaryRecipient, $subject, $body, $headers);

    // Redirect based on success or failure
    if ($primaryMailSent && $secondaryMailSent) {
        header("Location: .?emailSuccess=true"); // Assuming contact.php is your form page
    } else {
        header("Location: contact?emailSuccess=false"); // Assuming contact.php is your form page
    }
    exit;
}
?>

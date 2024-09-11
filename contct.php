<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullName = $_POST['fullName'];
    $number = $_POST['number']; // Change email to number
    $location = $_POST['location'];
    $event = $_POST['event'];
    $date = $_POST['date'];
    $guestNumber = $_POST['guestNumber'];
    $message = $_POST['message'];

    $to = "bhalevindubhojanam1@gmail.com";
    $subject = "Enquiry from website";
    $body = "Full Name: $fullName\nNumber: $number\nLocation: $location\nEvent Type: $event\nEvent Date: $date\nNumber of Guests: $guestNumber\nMessage: $message";

    // Send email to both recipients
    mail("reymould.social@gmail.com", $subject, $body);

    if (mail($to, $subject, $body)) {
        header("Location: contact.html?emailSuccess=true");
    } else {
        header("Location: contact.html?emailSuccess=false");
    }
    exit;
}
?>

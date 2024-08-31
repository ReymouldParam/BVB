<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
     $name = $_POST['name'];
     $email = $_POST['email'];
    $message = $_POST['message'];
    

    $to = "bhalevindubhojanam1@gmail.com";
    $subject = "Enquiry of user from website";
    $body = "Name: $name\nEmail-Id: $email\nMessage: $message\n";

    // echo $body;
    if (mail($to, $subject, $body)) {
        header("Location: .?emailSuccess=true");
    }else {
        header("location: .?emailSuccess=false");
    }
    exit;
}

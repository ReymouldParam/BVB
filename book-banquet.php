<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
     $name = $_POST['name'];
     $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $date = $_POST['date'];
    $time = $_POST['time'];
    $noOfGuests = $_POST['noOfGuests'];

    $nameOfEvent = $_POST['nameOfEvent'];

    $special = $_POST['special'];

    $terms = $_POST['terms'];

    $termsMessage="";
    for($x=0; $x < count($terms); $x++){
        $termsMessage= $termsMessage.($x+1).". ".$terms[$x]."\n";
    }

    $to = "bhalevindubhojanam1@gmail.com";
    $subject = "Enquiry of user from website";
    $body = "Name: $name\nEmail-Id: $email\nMobile: $mobile\nDate and time:$date,$time\nNumber of Members:$noOfGuests\n Name of the Event: $nameOfEvent\n Special Request: $special\n Terms: $termsMessage";

    // echo $body;
    if (mail($to, $subject, $body)) {
        header("Location: .?emailSuccess3=true");
    }else {
        header("location: .?emailSuccess3=false");
    }
    exit;
}

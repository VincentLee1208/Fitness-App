<?php


if($_POST["submit"]) {
    $recipient="wlee44@langara.bc.ca";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender<$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
    
    echo $thankYou;
    
}

?>

<!DOCTYPE html>

<html lang="en">
    
    <p>
        To return, <a href = "html/contact.html">Click here</a>
    </p>
    
</html>
<?php
// I'm honestly not sure why this file is here. It's not being used in the site.

//$name = $_POST['myName'];
//$email = $_POST['myEmail'];
//$question = $_POST['myQuestion'];
// Declare a variable and continue using it throughout the page.
// Change its value at the top once if necessary.

if (isset($_POST['myName'])) {
    $myName = $_POST['myName'];
    $myEmail = $_POST['myEmail'];
    $myQuestion = $_POST['myQuestion'];
    // These variables are declared here so they are available in contact.html.php because that's included.


    date_default_timezone_set('Etc/UTC');

    require '../PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
    $mail = new PHPMailer;

//Tell PHPMailer to use SMTP
    $mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

//Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
    $mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "formcatcher@gmail.com";

//Password to use for SMTP authentication
    $mail->Password = "whatever1234";

//Set who the message is to be sent from
    $mail->setFrom('formcatcher@gmail.com', 'Form Catcher');

//Set an alternative reply-to address
    $mail->addReplyTo($myEmail, $myName);

//Set who the message is to be sent to
    $mail->addAddress('mariojames211@gmail.com', 'Mario Lopriore');

//Set the subject line
    $mail->Subject = 'Contact submission from Portland Historical Tours - yay';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//    $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
//    $mail->AltBody = 'This is a plain-text message body';

// Make email HTML
    $mail->isHTML(true);

// Add body message
    $mail->Body = 'Email: ' . $myEmail . '<br>';
    $mail->Body .= 'Name: ' . $myName . '<br>';
    $mail->Body .= 'Question: ' . $myQuestion;


//Attach an image file
    $mail->addAttachment('../PHPMailer/examples/images/phpmailer_mini.png');

//send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        // echo "Message sent!";
        include('confirm.html.php');
    }

} else {
    include('contact.html.php');
}
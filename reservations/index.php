<?php

// Notes related to this area can be found in the contact/index.php file.
// $variables are given the ['values'] of user input from the reservations.html.php file.
if (isset($_POST['tour'])) {
    $tour = $_POST['tour'];
    $fName = $_POST['myfname'];
    $lName = $_POST['mylname'];
    $email = $_POST['myemail'];
    $phone = $_POST['myphone'];
    $tourDate = $_POST['mydate'];
    $groupSize = $_POST['mygroup'];
    $fdSensitivities = $_POST['mycomments'];

    // Connect to the database.
    include '../includes/db.inc.php';

    try
    {
        $sql = 'INSERT INTO reservations SET
            first_name = :first_name,
            last_name = :last_name,
            email = :email,
            phone = :phone,
            date = :date,
            participants = :participants,
            tour = :tour,
            sensitivities = :sensitivities';
        // Field names need to match those from the database.
        $s = $pdo->prepare($sql);
        $s->bindValue(':first_name', $fName);
        $s->bindValue(':last_name', $lName);
        $s->bindValue(':email', $email);
        $s->bindValue(':phone', $phone);
        $s->bindValue(':date', $tourDate);
        $s->bindValue(':participants', $groupSize);
        $s->bindValue(':tour', $tour);
        $s->bindValue(':sensitivities', $fdSensitivities);
        // The $_POST['myName'] values need to match the "name" of the form field in the reservations.html.php file.
        // See other notes about this in the contact\index.php file.

        $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'Error adding submitted author.';
        include 'error.html.php';
        exit();
    }

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
    $mail->addReplyTo($email, $fName);

//Set who the message is to be sent to
    $mail->addAddress('mariojames211@gmail.com', 'Mario Lopriore');

//Set the subject line
    $mail->Subject = 'Tour request from Portland Historical Tours - $$$';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//    $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
//    $mail->AltBody = 'This is a plain-text message body';

// Make email HTML
    $mail->isHTML(true);

// Add body message
    $mail->Body = 'Tour: ' . $tour . '<br>';
    $mail->Body .= 'First Name: ' . $fName . '<br>';
    $mail->Body .= 'Last Name: ' . $lName . '<br>';
    $mail->Body .= 'Email: ' . $email . '<br>';
    $mail->Body .= 'Phone: ' . $phone . '<br>';
    $mail->Body .= 'Tour Date: ' . $tourDate . '<br>';
    $mail->Body .= 'Total Participants: ' . $groupSize . '<br>';
    $mail->Body .= 'Food and Drink Sensitivities: ' . $fdSensitivities . '<br>';

//Attach an image file
    $mail->addAttachment('../PHPMailer/examples/images/phpmailer_mini.png');

//send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        // echo "Message sent!";
        include('success.html.php');
    }
    // The next curly bracket ends the initial if statement from line 5!
    // The else statement reloads the reservations.html.php file if nothing was entered into the 'tour' field.
} else {
    include('reservations.html.php');
}


<?php

// $myName = $_POST['myName'];
// $myEmail = $_POST['myEmail'];
// $myQuestion = $_POST['myQuestion'];
// Declare a variable and continue using it throughout the page instead of calling from the global array.
// See lines 28 - 30 for the replaced $variables.

if (isset($_POST['myName'])) {

    $myName = $_POST['myName'];
    $myEmail = $_POST['myEmail'];
    $myQuestion = $_POST['myQuestion'];

    // Connect to the database.
    include '../includes/db.inc.php';

    // Create a "try / catch" function.
    // The $sql variable is making a phpMyAdmin command INSERT INTO "table name" SET followed by the titles of the fields on the receiving end.
    try
    {
        $sql = 'INSERT INTO contact SET
            name = :name,
            email = :email,
            question = :question';
        // Field names need to match those from the database.
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $myName);
        $s->bindValue(':email', $myEmail);
        $s->bindValue(':question', $myQuestion);
        // The $_POST['myName'] values need to match the "name" of the form field in the contact.html.php file.
        // They also can get replaced by the variable themselves - which is how this is working. See line 6.
        // They also need to match the variable names on the confirm.html.php file.

        $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'Error adding submitted author.';
        include 'error.html.php';
        exit();
    }

    // Email code starts here - it's a long file.
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
    // .= concatenates the following info in the email.
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
        include 'confirm.html.php';
    }

} else {
    include 'contact.html.php';
}
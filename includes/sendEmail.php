<?php
require_once 'lib/swift_required.php';

// Create the SMTP configuration
$transport = Swift_SmtpTransport::newInstance("ssl://smtp.gmail.com", 465);
$transport->setUsername("samdohsol@gmail.com");
$transport->setPassword("samdoh123");

// Create the message
$message = Swift_Message::newInstance();
$message->setTo(array(
   "samsonanami@gmail.com" => "Samson Anami",
   "anami.samdo@gmail.com" => "Samdoh Anami"
));
// $message->setCc(array("samdo@fake.com" => "Aurelio De Rosa"));
$message->setBcc(array("boss@bank.com" => "Bank Boss"));
$message->setSubject("This email is sent using Swift Mailer");
$message->setBody("You're our best client ever.");
$message->setFrom("account@bank.com", "Your bank");
$message->attach(Swift_Attachment::fromPath("path/to/file/file.zip"));

// Send the email
$mailer = Swift_Mailer::newInstance($transport);
$mailer->send($message, $failedRecipients);

// Show failed recipients
print_r($failedRecipients);
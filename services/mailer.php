<?php
// If you are using Composer
// require 'vendor/autoload.php';

// If you are not using Composer (recommended)
require("../sendgrid-php/sendgrid-php.php");
require("../ignore/mailerkey.php");

$from = new SendGrid\Email(null, "pviker@me.com");
$subject = "FINAL TEST FOR EMAIL!";
$to = new SendGrid\Email(null, "pviker@me.com");
$content = new SendGrid\Content("text/plain", "Hello, Email!");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

?>
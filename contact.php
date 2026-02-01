<?php
// Prevent direct access
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /index.html');
    exit;
}

// Configuration
$recipient_email = 'AidanTimblin@gmail.com';
$redirect_success = '/index.html?contact=success';
$redirect_error = '/index.html?contact=error';

// Honeypot check - if this field is filled, it's likely a bot
if (!empty($_POST['website'])) {
    header('Location: ' . $redirect_success); // Fake success to fool bots
    exit;
}

// Time-based honeypot - form should take at least 3 seconds to fill
$form_time = isset($_POST['form_time']) ? (int)$_POST['form_time'] : 0;
$current_time = time();
if ($current_time - $form_time < 3) {
    header('Location: ' . $redirect_success); // Fake success to fool bots
    exit;
}

// Sanitize and validate inputs
$name = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
$email = isset($_POST['email']) ? trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) : '';
$message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

// Validation
$errors = [];

if (empty($name) || strlen($name) < 2) {
    $errors[] = 'Please provide your name.';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please provide a valid email address.';
}

if (empty($message) || strlen($message) < 10) {
    $errors[] = 'Please provide a message (at least 10 characters).';
}

// Check for suspicious patterns
if (preg_match('/\b(viagra|cialis|casino|poker|lottery)\b/i', $message . $name)) {
    header('Location: ' . $redirect_success); // Fake success to fool spammers
    exit;
}

// If there are validation errors, redirect back
if (!empty($errors)) {
    header('Location: ' . $redirect_error);
    exit;
}

// Prepare email
$subject = 'New Contact Form Submission from ' . $name;
$email_body = "You have received a new message from your website contact form.\n\n";
$email_body .= "Name: " . $name . "\n";
$email_body .= "Email: " . $email . "\n\n";
$email_body .= "Message:\n" . $message . "\n";

$headers = "From: noreply@aidantimblin.com\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email
if (mail($recipient_email, $subject, $email_body, $headers)) {
    header('Location: ' . $redirect_success);
} else {
    header('Location: ' . $redirect_error);
}
exit;
?>

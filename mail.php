<?php
// Function to fetch the content of a URL using curl
function fetchUrlContent($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
}

// Function to send email with HTML content
function sendEmailWithHtmlContent($to, $subject, $htmlContent) {
    // Set email headers
    $headers = "From: your_email@example.com" . "\r\n";
    $headers .= "Reply-To: your_email@example.com" . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8" . "\r\n";

    // Send the email
    mail($to, $subject, $htmlContent, $headers);
}

// Example usage:
$confirmationPageUrl = 'https://example.com/confirmation-modify-printview.php?uuid=72b84a86-5c8a-494f-a717-3b9078a607b9';
$htmlContent = fetchUrlContent($confirmationPageUrl);

// Replace these values with appropriate email and subject
$to = 'recipient@example.com';
$subject = 'Your Subject';

// Send the email with the HTML content
sendEmailWithHtmlContent($to, $subject, $htmlContent);
?>

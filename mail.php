<?php
$id=$_GET['uuid'];
function readHtmlFile($filePath) {
    return file_get_contents($filePath);
}

function sendEmailWithHtmlContent($to, $subject, $htmlContent) {

    $headers = "From: wanikhan919@gmail.com" . "\r\n";
    $headers .= "Reply-To: wanikhan919@gmail.com" . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8" . "\r\n";


    mail($to, $subject, $htmlContent, $headers);
}

$htmlFilePath = 'confirmation-modify-printview.php?uuid='.$id;
$htmlContent = readHtmlFile($htmlFilePath);


$to = 'wanikhan919@gmail.com';
$subject = 'Your Subject';


$mail=sendEmailWithHtmlContent($to, $subject, $htmlContent);
if($mail){
    header('location:success.php');
}
?>

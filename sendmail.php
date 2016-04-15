<?php
function send_mail($source, $content)
{
    $to = 'mfdonadeli@gmail.com';
    $from = 'site@institutopaulista.org';
    $subject = $source;
    $message = $content;
    $headers = "From:".$from;
    $resp=mail($to, $subject, $message, $headers);   
}

?>
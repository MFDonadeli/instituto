<?php

function format_content($source, $array)
{
    $str .= "<table width='524'>";
    
    $str .= "<tr><td colspan=2><img src=\"http://www.institutopaulista.org/images/headerTemplateContato.jpg\"/></td></tr>";
    $str .= "<tr><td colspan=2><h3>" . $source . "</td></tr>";
    
    foreach ($array as $key => $value) {
        $str .= "<tr><td width='15%' align='right'><strong>" . strtoupper($key) . "</strong></td><td>" . $value . "</td></tr>";
    }
    
    $str .= "</table>";
    
    return $str;   
}

function send_mail($source, $array)
{   
    $content = format_content($source, $array);
      
    $to = 'mfdonadeli@gmail.com';
    $from = 'site@institutopaulista.org';
    $subject = $source;
    $message = $content;
    
    $headers = "MIME-Version: 1.1\r\n";
    $headers .= "Content-type: text/html\r\n";
    $headers .= "From: ".$from."\r\n";
    $headers .= "Return-Path: ".$from."\r\n";
    
    $resp=mail($to, $subject, $message, $headers);   
    
}

?>
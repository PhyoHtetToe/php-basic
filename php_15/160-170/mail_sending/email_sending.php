<?php
$ary = ["Kuro@localhost,Kenta@localhost,Void@localhost"];
$to = implode(',', $ary);
$subject = 'PHP Mail Test';
$message = '<html><body>';
$message .= '<div style="width: 80%;margin: 0 auto;border: 1px solid #ddd;padding: 20px;overflow: auto;">';
$message .= '<h1 style="text-align: center; font-family: Cambria">One Call Away</h1>';
include("for_html.php");
include("for_html.php");
include("for_mail.php");
$message .= '</body></html>';
$header = "From: MMPHPTuto@gmail.com\r\n";
$header .= "Content-Type:text/html";
mail($to, $subject, $message, $header);

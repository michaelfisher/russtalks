<?php

	// Configuration 
    $to = "russharrington@me.com"; // Your email address. 
    $subject = "New Signup from RussTalks.com"; // Email subject line 
    
    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $from = "$name <$email>";
    $headers = "From: $from";

    $fields = array();
    $fields{"name"} = "Name";
    $fields{"email"} = "Email"; 

    $body = "Details:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

    $logfile = $_SERVER['DOCUMENT_ROOT'] . "/" . "logs" . "/" . $email;
    file_put_contents($logfile, $name);

?>

<?php
$headers = ‘From: yourmail@gmail.com’ . “rn” .
‘Reply-To: yourmail@gmail.com’ . “rn” .
‘X-Mailer: PHP/’ . phpversion();
if(mail(“targetMail@gmail.com”, “Test Email”, “Email is set up”, $headers)) echo “Correct”;
else echo “Wrong”;
?>

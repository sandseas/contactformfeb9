<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
 
 <div>
 
 <?php
 
    $emailTo="";
    $subject="Sandi is trying";
    $body= "You are Great";
    $headers ="From:  sandseas1@icloud.com";
    
    if (mail($emailTo, $subject, $body, $headers)) {
        
        echo "Mail successfully sent!";
    }   else {
        echo "Mail not sent!";
    }

?>
</div>
</body>
</html>
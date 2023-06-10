<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@essfgodomey.com';
$email_subject = 'Nouveau formulaire de message';
$email_body = "User Name : $name.\n".
              "User Email : $visitor_email.\n".
              "Subject : $subject.\n".
              "User Message : $message.\n";

$to = 'essaintefelicite@gmail.com';
$headers = "From : $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");            

?>

<!-- ======= Sauvegarde du first code écrit dans inscription_etudiant.php ======= -->

<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        ?php 
        $last_name = '  Collins';
        echo 'Bonjour' .$last_name.'  !' ;
    $repetition = 0;
    while ($repetition < 10) {
        echo '<p>  Lorem ipsum, dolor sit amet consectetur ad </p>'.'ça va ?';
        $repetition++;
    }

?>
    </p>
</body>
</html> -->